<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class LeetCodeService
{
    protected $baseUrl = 'https://leetcode.com/graphql/';

    protected function fetch($query, $variables = [])
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Referer' => 'https://leetcode.com',
        ])->post($this->baseUrl, [
            'query' => $query,
            'variables' => $variables,
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }

    public function getProfile($username)
    {
        $query = <<<'GRAPHQL'
        query userPublicProfile($username: String!) {
          matchedUser(username: $username) {
            username
            githubUrl
            linkedinUrl
            profile {
              ranking
              realName
              userAvatar
              countryName
              reputation
            }
          }
        }
        GRAPHQL;

        return $this->fetch($query, ['username' => $username])['data']['matchedUser'] ?? null;
    }

    public function getContestStats($username)
    {
        $query = <<<'GRAPHQL'
        query userContestRankingInfo($username: String!) {
          userContestRanking(username: $username) {
            attendedContestsCount
            rating
            globalRanking
            topPercentage
          }
        }
        GRAPHQL;

        return $this->fetch($query, ['username' => $username])['data']['userContestRanking'] ?? null;
    }

    public function getProblemStats($username)
    {
        $query = <<<'GRAPHQL'
        query userProfileUserQuestionProgressV2($userSlug: String!) {
          userProfileUserQuestionProgressV2(userSlug: $userSlug) {
            numAcceptedQuestions {
              count
              difficulty
            }
          }
        }
        GRAPHQL;

        return $this->fetch($query, ['userSlug' => $username])['data']['userProfileUserQuestionProgressV2'] ?? null;
    }

    public function getCalendar($username)
{
    $query = <<<'GRAPHQL'
    query userProfileCalendar($username: String!, $year: Int) {
      matchedUser(username: $username) {
        userCalendar(year: $year) {
          activeYears
          streak
          totalActiveDays
          submissionCalendar
        }
      }
    }
    GRAPHQL;

    // First fetch without year to get activeYears
    $initial = $this->fetch($query, ['username' => $username]);

    $calendar = $initial['data']['matchedUser']['userCalendar'] ?? null;
    if (!$calendar) {
        return null;
    }

    // Pick latest available active year
    $year = max($calendar['activeYears'] ?? [now()->year]);

    // Fetch again with correct year
    $result = $this->fetch($query, ['username' => $username, 'year' => $year]);

    return $result['data']['matchedUser']['userCalendar'] ?? null;
}

}
