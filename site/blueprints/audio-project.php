<?php if(!defined('KIRBY')) exit ?>

title: Audio Project
pages: false
files:
  sortable: true
fields:
  projectTitle:
    label: Project
    type:  text
  artist:
    label: Artist
    type:  text
  role:
    label: Roles
    type: checkboxes
    options:
      Recording: Recording
      Mixing: Mixing
      Production: Production
  description:
    label: Description
    type: textarea
  othercreds:
    label: Other Credits
    type: textarea
  link:
    label: Source
    type: url
  linktype:
    label: Source Type
    type: select
    options:
      Spotify: Spotify
      Bandcamp: Bandcamp
      Soundcloud: Soundcloud
      YouTube: YouTube
  link2:
    label: Source 2
    type: url
  linktype2:
    label: Source Type 2
    type: select
    options:
      Spotify: Spotify
      Bandcamp: Bandcamp
      Soundcloud: Soundcloud
      YouTube: YouTube
