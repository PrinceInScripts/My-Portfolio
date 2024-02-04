import React, { useEffect } from 'react'
import { FaAngleRight, FaUser } from 'react-icons/fa'
import about from "../../assets/images/about.jpg"
import ScrollReveal from 'scrollreveal';
import "./About.css"

function About() {
   const srtop = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 1000,
    reset: true
  });

  useEffect(() => {
    srtop.reveal('.about .content h3', { delay: 200 });
    srtop.reveal('.about .row .image', { delay: 200 });
    srtop.reveal('.about .content .tag', { delay: 200 });
    srtop.reveal('.about .content p', { delay: 200 });
    srtop.reveal('.about .content .box-container', { delay: 200 });
    srtop.reveal('.about .content .resumebtn', { delay: 200 });
  }, [srtop]);

  return (
    <section class="about" id="about">
    <h2 class="heading"><FaUser/> About <span>Me</span></h2>
    
    <div class="row">

    <div class="image">
        <img draggable="false" class="tilt" src={about} alt=""/>
    </div>
    <div class="content">
        <h3>I'm Prince</h3>
        <span class="tag">Full Stack Developer</span>
        
        <p>I am a Full-Stack developer based in Kota, India. 
        Hello there! 👋 I'm Prince Kumar, a passionate MERN stack developer on a journey to bring innovative web solutions to life. 
        I find joy in turning ideas into reality through the art of coding. 
        With a solid foundation in HTML, CSS, and JavaScript, coupled with the power of React, Node.js, and MongoDB, 
        I embark on a mission to create seamless and engaging user experiences.</p>
       <p>Beyond the lines of code, I thrive in the world of continuous learning. Exploring advanced JavaScript, 
        diving into data structures, and delving into the basics of machine learning are just a few stops on my learning roadmap. 
        I believe in the transformative power of technology and its ability to simplify complexities. </p>
        
        <div class="box-container">
            <div class="box">
              <p><span> email : </span> princepk7878@gmail.com</p>
              <p><span> place : </span> Kota, India </p>
            </div>
        </div>
        
        <div class="resumebtn">
            <a href="https://drive.google.com/file/d/1FZ4_dw--pgy9W625tOvkAS6w_zA7hxJT/view?usp=sharing" target="_blank" class="btn"><span>Resume</span>
               <span class="icon"><FaAngleRight/></span> 
            </a>
        </div>

    </div>
    </div>
</section>

  )
}

export default About
