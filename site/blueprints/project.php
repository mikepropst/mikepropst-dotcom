<?php if(!defined('KIRBY')) exit ?>

title: Project
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
    includeingallery:
      label: Include In Gallery
      type: checkbox
      text: Show this in the gallery below the text
fields:
  title:
    label: Title
    type:  text
  company:
    label: Company
    type: select
    options:
      Dun & Bradstreet: Dun & Bradstreet
      AOL: AOL
      HCB: HCB Health
      Humidity Labs: Humidity Labs
      TED Conferences: TED Conferences
  companyimg:
    label: Company Logo
    type: text
  text:
    label: Text
    type:  textarea
  roles:
    label: Roles
    type: tags
  tools:
    label: Tools
    type: tags
  blurb:
    label: Blurb
    type: text
    required: true
