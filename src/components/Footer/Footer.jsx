import React from "react";
import { AiFillGithub, AiFillLinkedin, AiFillTwitterCircle } from "react-icons/ai";
import {FaChevronCircleRight, FaEnvelope, FaHeart, FaMapMarked} from "react-icons/fa";
import { Link } from "react-scroll";
import "./Footer.css";


function Footer() {
  return (
    <>
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Prince's Portfolio</h3>
          <p>
            Thank you for visiting my personal portfolio website. Connect with
            me over socials. <br /> <br /> Keep Rising 🚀. 
          </p>
        </div>

        <div class="box">
          <h3>quick links</h3>
          <Link to="home" smooth={true} duration={500}>
          <span><FaChevronCircleRight/> </span> Home
          </Link>
          <Link to="about" smooth={true} duration={500}>
          <span><FaChevronCircleRight/> </span> About
          </Link>
          <Link to="skills" smooth={true} duration={500}>
          <span><FaChevronCircleRight/> </span> Skills
          </Link>
          <Link to="education" smooth={true} duration={500}>
          <span><FaChevronCircleRight/> </span> Education
          </Link>
          <Link to="work" smooth={true} duration={500}>
          <span><FaChevronCircleRight/> </span> Work
          </Link>
          <Link to="contact" smooth={true} duration={500}>
          <span><FaChevronCircleRight/> </span> Contact
          </Link>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <p>
            {" "}
            <span><FaEnvelope/></span>princepk7878kumar@gmail.com
          </p>
          <p>
            {" "}
            <span><FaMapMarked/></span>Kota, India
          </p>
          <div class="share">
            <a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/prince-kumar-788673253/" target="_blank">
              <AiFillLinkedin />
            </a>
            <a class="github" aria-label="GitHub" href="https://github.com/PrinceInScripts" target="_blank">
              <AiFillGithub />
            </a>
            <a class="twitter" aria-label="Twitter" href="https://twitter.com/Princek02057932" target="_blank">
              <AiFillTwitterCircle />
            </a>
            <a
              href="mailto:princepk7878kumar@gmail.com@gmail.com"
              class="email"
              aria-label="Mail"
              target="_blank"
            >
              <FaEnvelope />
            </a>
          </div>
        </div>
      </div>

      <h1 class="credit">
        <p>Designed with</p> <p className="heart"><FaHeart size={18}/></p> by{" "}
        <a href="https://www.linkedin.com/in/prince-kumar-788673253/"> Prince kumar</a>
      </h1>
    </section>


    </>
  );
}

export default Footer;
