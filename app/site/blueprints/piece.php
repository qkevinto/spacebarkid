<?php if(!defined('KIRBY')) exit ?>

title: Work
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  thumbnail:
    label: Thumbnail
    type:  text
    required: true
    help: Enter the file name of the image you wish to be used as the thumbnail. Thumbnails will automatically be resized and cropped down to 600x400px.
  hero:
    label: Hero Image
    type:  text
    required: true
    help: Enter the file name of the image you wish to be used as the hero.
  excerpt:
    label: Excerpt
    type: textarea
  text:
    label: Text
    type:  textarea
    required: true
