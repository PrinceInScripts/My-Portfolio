import React, { useEffect, useRef, useState } from 'react'
import { GiHamburgerMenu } from 'react-icons/gi';
import { Link, animateScroll as scroll,scroller } from 'react-scroll';
import { RxCross1 } from "react-icons/rx";

import "./Header.css"
function Header() {
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
    <header>
        <a href="/" className="logo"> Prince</a>
       

        <div id="menu" className={isMenuActive ? 'fa-bars' : 'fa-times'} onClick={handleMenuClick}>
        {isMenuActive ? <RxCross1/> : <GiHamburgerMenu/>}
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
              <Link to="contact" smooth={true} duration={500}>
                Contact
              </Link>
            </li>
            </ul>
        </nav>
     </header>
  )
}

export default Header
