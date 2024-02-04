import React from "react";
import "./Home.css";
import Header from "../../components/Header/Header";
import Hero from "../../components/Hero/Hero";
import About from "../../components/About/About";
import Skills from "../../components/Skills/Skills";
import Education from "../../components/Education/Education";
import Project from "../../components/Project/Project";
import Contact from "../../components/Contact/Contact";
import Footer from "../../components/Footer/Footer";

function Home() {
  return (
    <>
    {/* Header */}
      <Header />
    {/* Hero  */}
      <Hero />
    {/* About */}
      <About />
    {/* Skills */}
      <Skills />
    {/* Education */}
      <Education />
    {/* Project */}
      <Project/>
    {/* Contact */}
    <Contact/>
    {/* Footer */}
    <Footer/>
    </>
  );
}

export default Home;
