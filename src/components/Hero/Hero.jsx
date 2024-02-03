import React, { useEffect, useRef } from 'react'
import Typed from 'typed.js';
import VanillaTilt from 'vanilla-tilt';
import { AiFillLinkedin,AiFillInstagram,AiFillGithub,AiFillTwitterCircle } from "react-icons/ai";
import {  FaRegArrowAltCircleDown, FaTelegram, FaUser } from "react-icons/fa";
import hero from "../../assets/images/hero.png"
import "./Hero.css"

function Hero() {
    const particlesRef = useRef(null); 
    useEffect(() => {
        const typed=new Typed('.typing-text',{
            strings:["Frontend Developer","Backend Developer","Web Designing"],
            loop:true,
            typeSpeed:50,
            backSpeed:25,
            backDelay:500,
        })
        

        VanillaTilt.init(document.querySelectorAll(".tilt"),{
            max:15,
        })

        const container = document.getElementById('particles-js');
        const containerStyle = getComputedStyle(container);
        const bgColor = containerStyle.backgroundColor;

        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 50,
                },
                size: {
                    value: 3,
                },
                color: {
                    value: bgColor === 'rgb(0, 0, 0)' ? '#fff' : '#000', 
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: bgColor === 'rgb(0, 0, 0)' ? '#fff' : '#000', 
                    opacity: 0.4,
                    width: 1,
                },
                move: {
                    speed: 10, 
                },
            },
            interactivity: {
                events: {
                    onhover: {
                        enable: true,
                        mode: 'repulse',
                    },
                },
            },
        });

        
        return ()=>{
            typed.destroy()
        }
        
      },[])
  return (
    <section class="home" id="home">
    <div id="particles-js" ref={particlesRef}></div>

   <div class="content">
   <h2>Hi There,<br/> I'm Prince <span>Kumar</span></h2>
   <p>i am into <span class="typing-text"></span></p>
   <a href="#about" class="btn"><span>About Me</span>
    <span className='icon'> <FaRegArrowAltCircleDown/></span>
   </a>
   <div class="socials">
       <ul class="social-icons">
         <li><a class="linkedin" aria-label="LinkedIn" href="#" target="_blank"><AiFillLinkedin/></a></li> 
         <li><a class="github" aria-label="GitHub" href="#" target="_blank"><AiFillGithub/></a></li>
         <li><a class="twitter" aria-label="Twitter" href="#" target="_blank"><AiFillTwitterCircle/></a></li>
         <li><a class="telegram" aria-label="Telegram" href="#" target="_blank"><FaTelegram/></a></li>
         <li><a class="instagram" aria-label="Instagram" href="#"><AiFillInstagram/></a></li>
       </ul>
     </div>
   </div>
   <div class="image">
       <img draggable="false" class="tilt" src={hero} alt=""/>
   </div>
</section>
  )
}

export default Hero