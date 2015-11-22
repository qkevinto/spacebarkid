<?php if(!defined('KIRBY')) exit ?>

title: Piece
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
      Please ensure that each project has a thumbnail and hero image. Enter the file name of the thumbnail and hero image within the page's folder. Thumbnail will be cropped to an appropriate size automatically.
  thumbnail:
    label: Thumbnail
    type:  text
  hero:
    label: Hero Image
    type:  text
  excerpt:
    label: Excerpt
    type: textarea
  text:
    label: Text
    type:  textarea
