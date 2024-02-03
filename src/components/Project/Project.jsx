import React from "react";
import projects from "../../data/project";
import VanillaTilt from "vanilla-tilt";
import { useEffect } from "react";
import { FaEye } from "react-icons/fa";
import "./Project.css";

function Project() {
  function showProjects(projects) {
    let projectsContainer = document.querySelector("#work .box-container");
    let projectHTML = "";
    projects
      .slice(0, 10)
      .filter((project) => project.category != "android")
      .forEach((project) => {
        projectHTML += `
        <div class="box tilt">
      <img draggable="false" src="${project.image}" alt="project" />
      <div class="content">
        <div class="tag">
        <h3>${project.name}</h3>
        </div>
        <div class="desc">
          <p>${project.desc}</p>
          <div class="btns">
            <a href="${project.links.view}" class="btn" target="_blank"> View</a>
            <a href="${project.links.code}" class="btn" target="_blank">Code </a>
          </div>
        </div>
      </div>
    </div>`;
      });
    projectsContainer.innerHTML = projectHTML;

    VanillaTilt.init(document.querySelectorAll(".tilt"), {
      max: 15,
    });
  }

  useEffect(() => {
    showProjects(projects);
    window.addEventListener("resize", () => showProjects(projects));
    window.addEventListener("load", () => showProjects(projects));
    return () => {
      window.removeEventListener("resize", () => showProjects(projects));
      window.removeEventListener("load", () => showProjects(projects));
    };
  }, []);

  return (
    <section class="work" id="work">
      <h2 class="heading">
        {" "}
        Projects <span>Made</span>
      </h2>

      <div class="box-container">

        
      </div>
    </section>
  );
}

export default Project;
