import React, { useEffect, useRef, useState } from "react";
import "./Home.css";
import Header from "../../components/Header/Header";
import Hero from "../../components/Hero/Hero";
import About from "../../components/About/About";
import Skills from "../../components/Skills/Skills";

function Home() {
  return (
    <>
    //Header
      <Header />
    //Hero 
      <Hero />
    //About
      <About />
    //Skills
      <Skills />
    </>
  );
}

export default Home;
