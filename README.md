# asc-member-scanner
a barcode scanning application for Arch Street Center

## project setup
We are using the metronomic theme Admin #3 http://keenthemes.com/preview/metronic/theme/admin_3

1.  Copy the theme/assets directory.  Under the theme/assets/layouts directory you can remove all directories except /global and /layout3
2.  Copy the sass directory
3.  Copy the gulpfile.js, package.json

When you run the gulp task to start the development server you will get errors related to sass dependencies so you will need to run npm install for the packages listed under devDependencies in the package.json

After this is complete you should be able to pull the html files from the git project and they should work.

