# JSON Bookmark Parser

## Description

A WordPress plugin to upload and parse JSON bookmark files, displaying them as an HTML list on your site.

## Installation

1. **Download from GitHub**

   - Download the plugin from my GitHub repository: [GitHub Link](https://github.com/spencerharris63/bookmarks-to-json-wordpress-plugin)
   - Extract the downloaded ZIP file.

2. **Activate the Plugin**
   - Go to the WordPress admin dashboard.
   - Navigate to `Plugins` > `Installed Plugins`.
   - Activate `JSON Bookmark Parser`.

## Usage

1. **You can use a Google Chrome extension to automatically generate a JSON file from any of your bookmark lists**

   - I used this one, [Chrome Extension](https://chromewebstore.google.com/detail/bookmarks-to-json/ladccghgadelmlkjfkdjhjlinhogaibi). It's easy to use, you add it to your Chrome as an extension, then right click it, select "Options", then using it's interface select which bookmarks list you want to convert to a JSON file.
   - JSON is basically a fancy text file that stores data in a structured format.

1. **Upload JSON Bookmarks**

   - In the WordPress admin dashboard, navigate to `Bookmark Parser`.
   - Use the form to upload your JSON file containing bookmarks.

1. **Display Bookmarks**
   - Add the shortcode `[display_bookmarks]` to any page or post where you want to display the parsed bookmarks.

## Shortcode

- `[display_bookmarks]`: Insert this shortcode into any post or page to display the bookmarks.

## Example `bookmarks.json` File Format

```json
[
  {
    "name": "Emergent Magazine",
    "url": "https://www.emergentmag.com/",
    "path": "/Other Bookmarks/Art Websites"
  },
  {
    "name": "ArtReview",
    "url": "https://artreview.com/",
    "path": "/Other Bookmarks/Art Websites"
  },
  {
    "name": "e-flux",
    "url": "https://www.e-flux.com/",
    "path": "/Other Bookmarks/Art Websites"
  },
  {
    "name": "Artsy — Discover, Buy, and Sell Fine Art",
    "url": "https://www.artsy.net/",
    "path": "/Other Bookmarks/Art Websites"
  },
  {
    "name": "Artforum",
    "url": "https://www.artforum.com/",
    "path": "/Other Bookmarks/Art Websites"
  },
  {
    "name": "The Vivid Violence and Divine Healing of Ex-Voto…",
    "url": "https://hyperallergic.com/334143/the-visualized-violence-and-divine-healing-of-the-ex-voto-painting/#",
    "path": "/Other Bookmarks/Art Websites"
  },
  {
    "name": "A Contemporary Look at Devotion",
    "url": "https://hyperallergic.com/771225/a-contemporary-look-at-devotion-ex-votos/",
    "path": "/Other Bookmarks/Art Websites"
  },
  {
    "name": "BOMB Magazine | Luc Tuymans and Kerry James Marsh…",
    "url": "https://bombmagazine.org/articles/luc-tuymans-and-kerry-james-marshall/",
    "path": "/Other Bookmarks/Art Websites"
  },
  {
    "name": "Home - PPOW",
    "url": "https://www.ppowgallery.com/",
    "path": "/Other Bookmarks/Art Websites"
  },
  {
    "name": "Lee Lozano, 2016, Lozano c. 1962, Helen Molesworth — KARMA",
    "url": "https://karmakarma.org/texts/lee-lozano-2018-lozano-c-1962-helen-molesworth/",
    "path": "/Other Bookmarks/Art Websites"
  },
  {
    "name": "Glasstire | Texas Visual Art News & Reviews",
    "url": "https://glasstire.com/",
    "path": "/Other Bookmarks/Art Websites"
  }
]
```
