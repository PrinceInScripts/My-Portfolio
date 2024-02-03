import React from 'react'
import jnv from "../../assets/images/jnv.jpg"
import mb from "../../assets/images/mb.jpg"
import "./Education.css"

function Education() {
  return (
    <section class="education" id="education">

    <h1 class="heading"> My <span>Education</span></h1>
  
      <p class="qoute">Education is not the learning of facts, but the training of the mind to think.</p>
  
      <div class="box-container">
  
      <div class="box">
          <div class="image">
          <img draggable="false" src={mb} alt="" />
          </div>
          <div class="content">
          <h3>Bachelor of Computer Application</h3>
          <p>Maa Bharti PG College , Kota </p>
          <h4>2022-2025 | Pursuing</h4>
          </div>
      </div>
  
      <div class="box">
        <div class="image">
        <img draggable="false" src={jnv} alt=""/>
        </div>
        <div class="content">
        <h3>High Schooling</h3>
        <p>Jawahar Navodaya Vidhyalaya , Jhalawar</p>
        <h4>2017-2021 | Completed</h4>
        </div>
      </div>
  
  </div>
  </section>
  )
}

export default Education
