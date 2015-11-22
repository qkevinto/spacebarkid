<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  info:
    label: Note
    type: info
    text: >
      Please ensure that each project has a hero image. Enter the file name of the hero image within the page's folder.
  hero:
    label: Hero Image
    type:  text
  excerpt:
    label: Excerpt
    type: textarea
  text:
    label: Text
    type:  textarea
