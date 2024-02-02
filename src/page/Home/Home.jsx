import React, { useEffect, useRef, useState } from 'react'
import Typed from 'typed.js';
import VanillaTilt from 'vanilla-tilt';
import { AiFillLinkedin,AiFillInstagram,AiFillGithub,AiFillTwitterCircle } from "react-icons/ai";
import { FaTelegram, FaUser } from "react-icons/fa";
import { GiHamburgerMenu } from "react-icons/gi";
import { FaRegArrowAltCircleDown } from "react-icons/fa";
import { FaAngleRight } from "react-icons/fa";
import { Link, animateScroll as scroll,scroller } from 'react-scroll';
import hero from "../../assets/images/hero.png"
import profile from "../../assets/images/profile.jpg"
import "./Home.css"



function Home() {
    const menuRef=useRef(null)
    const navbarRef=useRef(null)
    const particlesRef = useRef(null); 

    const [isMenuActive,setMenuActive]=useState(false)

    const handleMenuClick = () => {
        setMenuActive(!isMenuActive);
      };
    
      useEffect(() => {
        if (menuRef.current && navbarRef.current) {
          menuRef.current.classList.toggle('fa-times', isMenuActive);
          navbarRef.current.classList.toggle('nav-toggle', isMenuActive);
        }
      }, [isMenuActive]);

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
    <>
      {/* Navbar start */}
      <header>
        <a href="/" class="logo"> Prince</a>

        <div id="menu" className={isMenuActive ? 'fa-bars' : 'fa-times'} onClick={handleMenuClick}>
        <GiHamburgerMenu />
        </div>
        <nav className={`navbar ${isMenuActive ? 'nav-toggle' : ''}`} ref={navbarRef}>
            
            <ul>
            <li>
              <Link to="home" smooth={true} duration={500}>
                Home
              </Link>
            </li>
            <li>
              <Link to="about" smooth={true} duration={500}>
                About
              </Link>
            </li>
            <li>
              <Link to="skills" smooth={true} duration={500}>
                Skills
              </Link>
            </li>
            <li>
              <Link to="education" smooth={true} duration={500}>
                Education
              </Link>
            </li>
            <li>
              <Link to="work" smooth={true} duration={500}>
                Work
              </Link>
            </li>
            <li>
              <Link to="experience" smooth={true} duration={500}>
                Experience
              </Link>
            </li>
            <li>
              <Link to="contact" smooth={true} duration={500}>
                Contact
              </Link>
            </li>
            </ul>
        </nav>
     </header>

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

    </>
  )
}

export default Home
