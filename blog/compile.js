var metalsmith  = require('metalsmith');
var markdown    = require('metalsmith-markdown');
var templates   = require('metalsmith-templates');
var assets      = require('metalsmith-assets');
var collections = require('metalsmith-collections');
var permalinks  = require('metalsmith-permalinks');

console.log('* Starting build');

metalsmith(__dirname)
  .metadata({
    helpers: {
      moment: require('moment')
    },
    site: {
      date: new Date(),
      title: 'Static Shock',
      author: 'Dream Team',
      description: 'A static site about static shocks',
      keywords: 'metalsmith, static, site, shocks'
    }
  })
  .use(collections({
    posts: {
      pattern: 'posts/*',
      sortBy: 'date',
      reverse: true
    }
  }))
  .use(markdown())
  .use(permalinks({
    pattern: '/:collection/:date/:title'
  }))
  .use(templates('jade'))
  .use(assets({
    source: './public', // relative to __dirname
    destination: './' // Root of the build directory
  }))
  .build(function(err, files) {
    if (err) {
      console.error('- Build failed');
      throw err;
    }
    console.log('* Build successful');
    console.log('+ File(s): ' + Object.keys(files).length);
    console.log('+ Time: ' + process.uptime().toFixed(3) + ' seconds');
  });
   