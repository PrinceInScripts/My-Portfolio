import React, { useEffect } from "react";
import skills from "../../data/skills";
import "./skills.css";

function Skills() {
  function showSkills(skills) {
    let skillsContainer = document.getElementById("skillsContainer");
    let skillsHTML = "";
    skills.forEach((skill) => {
      skillsHTML += `
            <div class="bar">
            <img src="${skill.icon}" alt="${skill.name}" width="55px"/>
            <span>${skill.name}</span>
            </div>
            `;
    });
    skillsContainer.innerHTML = skillsHTML;
  }

  useEffect(() => {
    showSkills(skills);
  }, []);
  return (
    <section class="skills" id="skills">
      <h2 class="heading">
        {" "}
        Skills & <span>Abilities</span>
      </h2>

      <div class="container">
        <div class="row" id="skillsContainer"></div>
      </div>
    </section>
  );
}

export default Skills;
