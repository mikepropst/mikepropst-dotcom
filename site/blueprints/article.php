<?php if(!defined('KIRBY')) exit ?>

title: Article
pages: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  summary:
    label: Summary
    type: textarea
  tags:
    label: Tags
    type: tags
  posttype:
    label: Post Type
    type: select
    options:
      link: Link
      editorial: Editorial
      short: Short
  postlink:
    label: Link
    type: url
  date:
    label: Date
    type: date
    default: today