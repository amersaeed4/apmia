---
title: "Contact Us"
menu: "Contact Us"
subtitle: "We would be glad to hear from you"
map_embed: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.897689119143!2d73.04436101520474!3d33.65981278071448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df951e099a339f%3A0x5769b69137e8bec1!2sAPMIA+(All+Pakistan+Marble+Industries+Association)!5e0!3m2!1sen!2s!4v1546410935259"
links_title: "Important links"
links:
  - label: "Federal Board of Revenue"
    url: "https://www.fbr.gov.pk"
  - label: "Ministry of Commerce"
    url: "http://www.commerce.gov.pk"
  - label: "Pakistan Stone Development Company"
    url: "http://pasdec.com.pk"
form:
  name: "apmia-contact"
  fields:
    name:
      label: "Your name"
      placeholder: "Full name"
      type: "text"
      validate:
        required: true
    email:
      label: "Email"
      placeholder: "you@example.com"
      type: "email"
      validate:
        required: true
    phone:
      label: "Phone (optional)"
      type: "text"
    subject:
      label: "Subject"
      type: "text"
      validate:
        required: true
    message:
      label: "Message"
      type: "textarea"
      rows: 6
      validate:
        required: true
    honeypot:
      type: "honeypot"
  buttons:
    submit:
      type: "submit"
      value: "Send message"
  process:
    - save:
        fileprefix: "contact-"
        dateformat: "Ymd-His-u"
        extension: "txt"
        body: "{% include 'forms/data.txt.twig' %}"
    - email:
        subject: "[APMIA website] {{ form.value.subject|e }}"
        body: "{% include 'forms/data.html.twig' %}"
        reply_to: "{{ form.value.email }}"
    - message: "Thank you for getting in touch. We will reply as soon as we can."
    - reset: true
---
