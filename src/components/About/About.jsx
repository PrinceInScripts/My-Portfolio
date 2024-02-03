import React from 'react'
import { FaAngleRight, FaUser } from 'react-icons/fa'
import profile from "../../assets/images/profile.jpg"
import "./About.css"

function About() {
  return (
    <section class="about" id="about">
    <h2 class="heading"><FaUser/> About <span>Me</span></h2>
    
    <div class="row">

    <div class="image">
        <img draggable="false" class="tilt" src={profile} alt=""/>
    </div>
    <div class="content">
        <h3>I'm Prince</h3>
        <span class="tag">Full Stack Developer</span>
        
        <p>I am a Full-Stack developer based in Kota, India. 
          I am very passionate about improving my coding skills & developing applications & websites.
          I build WebApps and Websites using MERN Stack.
          Working for myself to improve my skills.
          Love to build Full-Stack clones. </p>
        
        <div class="box-container">
             <div class="box">
              <p><span> age: </span> 20</p>
              <p><span> phone : </span> +91 XXX-XXX-XXXX</p>
            </div>
            <div class="box">
              <p><span> email : </span> princepk7878@gmail.com</p>
              <p><span> place : </span> Kota, India </p>
            </div>
        </div>
        
        <div class="resumebtn">
            <a href="#" target="_blank" class="btn"><span>Resume</span>
               <span class="icon"><FaAngleRight/></span> 
            </a>
        </div>

    </div>
    </div>
</section>

  )
}

export default About
