<?php if(!defined('KIRBY')) exit ?>

title: Mobile Project
pages: false
files:
  sortable: true
  fields: 
    title:
      label: Title
      type: text
    caption: 
      label: Caption
      type: textarea
    linkurl:
      label: Link URL (Optional)
      type: text
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  roles:
    label: Roles
    type: tags
  blurb:
    label: Blurb
    type: text
    required: true