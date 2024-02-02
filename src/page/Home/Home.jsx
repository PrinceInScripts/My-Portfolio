import React, { useEffect, useRef, useState } from 'react'
import { AiFillLinkedin } from "react-icons/ai";
import { AiFillInstagram } from "react-icons/ai";
import { AiFillGithub } from "react-icons/ai";
import { AiFillTwitterCircle } from "react-icons/ai";
import { FaTelegram } from "react-icons/fa";
import { GiHamburgerMenu } from "react-icons/gi";
import "./Home.css"



function Home() {
    const menuRef=useRef(null)
    const navbarRef=useRef(null)

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
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
     </header>

     <section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
    <h2>Hi There,<br/> I'm Jigar <span>Sable</span></h2>
    <p>i am into <span class="typing-text"></span></p>
    <a href="#about" class="btn"><span>About Me</span>
      <i class="fas fa-arrow-circle-down"></i>
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
    <img draggable="false" class="tilt" src="./assets/images/hero.png" alt=""/>
</div>
</section>
    </>
  )
}

export default Home
