import React, { useEffect, useState } from "react";
import contact from "../../assets/images/contact.png";
import ScrollReveal from "scrollreveal";
import {
  FaComment,
  FaEnvelope,
  FaPaperPlane,
  FaPhoneAlt,
  FaUser,
} from "react-icons/fa";
import emailjs from "emailjs-com";
import "./Contact.css";
import toast from "react-hot-toast";

function Contact() {
  const [contactDetails, setContactDetials] = useState({
    name: "",
    email: "",
    phone: "",
    message: "",
  });

  function onchange(e) {
    const { name, value } = e.target;
    setContactDetials((prevData) => {
      return {
        ...prevData,
        [name]: value,
      };
    });
  }

  const isValidEmail = (email) => {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  };

  const isValidPhone = (phone) => {
    const phoneRegex = /^\d{10}$/;
    return phoneRegex.test(phone);
  };

  const handleSubmit = (event) => {
    event.preventDefault();
    if (!contactDetails.name) {
      toast.error("Please enter your name.");
      return;
    }
    if (!contactDetails.email) {
      toast.error("Please enter your name.");
      return;
    }
    if (!contactDetails.phone) {
      toast.error("Please enter your name.");
      return;
    }
    if (!contactDetails.message) {
      toast.error("Please enter your name.");
      return;
    }

    if (!isValidEmail(contactDetails.email)) {
      toast.error("Please enter a valid email address.");
      return;
    }

    if (!isValidPhone(contactDetails.phone)) {
      toast.error("Please enter a valid phone number (10 digits).");
      return;
    }

    emailjs.init("PM34j4ctkfU902CIl");

    emailjs
      .sendForm("service_fdc8ao8", "template_pee3upq", event.target)
      .then((response) => {
        event.target.reset();
        toast.success("Form Submitted Successfully");
      })
      .catch((error) => {
        console.log("FAILED...", error);
        toast.error("Form Submission Failed! Try Again");
      });

    setContactDetials({
      name: "",
      email: "",
      phone: "",
      message: "",
    });
  };

  const srtop = ScrollReveal({
    origin: "top",
    distance: "80px",
    duration: 1000,
    reset: true,
  });
  const srtop1 = ScrollReveal({
    origin: "left",
    distance: "180px",
    duration: 1000,
    reset: true,
  });
  const srtop2 = ScrollReveal({
    origin: "right",
    distance: "180px",
    duration: 1000,
    reset: true,
  });

  useEffect(() => {
    srtop.reveal('.contact .container', { delay: 400 });
    srtop.reveal('.contact .container .form-group', { delay: 400 });
    srtop1.reveal(".contact .container", { delay: 400 });
    srtop2.reveal(".contact .container .form-group", { delay: 400 });
  }, [srtop]);

  return (
    <section class="contact" id="contact">
      <h2 class="heading">
        {" "}
        Get in <span>Touch</span>
      </h2>

      <div class="container">
        <div class="content">
          <div class="image-box">
            <img draggable="false" src={contact} alt="" />
          </div>
          <form id="contact-form" onSubmit={handleSubmit}>
            <div class="form-group">
              <div class="field">
                <input
                  type="text"
                  name="name"
                  placeholder="Name"
                  required
                  value={contactDetails.name}
                  onChange={onchange}
                />
                <span>
                  <FaUser />
                </span>
              </div>
              <div class="field">
                <input
                  type="text"
                  name="email"
                  placeholder="Email"
                  required
                  value={contactDetails.email}
                  onChange={onchange}
                />
                <span>
                  <FaEnvelope />
                </span>
              </div>
              <div class="field">
                <input
                  type="text"
                  name="phone"
                  placeholder="Phone"
                  value={contactDetails.phone}
                  onChange={onchange}
                />
                <span>
                  <FaPhoneAlt />
                </span>
              </div>
              <div class="message">
                <textarea
                  placeholder="Message"
                  name="message"
                  required
                  value={contactDetails.message}
                  onChange={onchange}
                ></textarea>
                <span>
                  {" "}
                  <FaComment />{" "}
                </span>
              </div>
            </div>
            <div class="button-area">
              <button type="submit">
                Submit{" "}
                <span>
                  <FaPaperPlane />
                </span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  );
}

export default Contact;
