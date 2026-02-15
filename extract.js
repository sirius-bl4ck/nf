const fs = require('fs');
const unzipper = require('unzipper');

fs.createReadStream('Netflix.zip')
  .pipe(unzipper.Extract({ path: './' }))
  .on('close', () => console.log('Done'));
