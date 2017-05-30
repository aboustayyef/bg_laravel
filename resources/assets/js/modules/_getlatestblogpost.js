window.axios = require('axios');

// get the latest blog post
let latestPost = {};
let latestPostMediaSource = '';
let latestPostMediaUrl = '';

axios.get('https://blog.bluegallery.com.gh/wp-json/wp/v2/posts')
  .then(function (response) {
  	latestPost = response.data[0];
  	latestPostMediaSource = latestPost._links["wp:featuredmedia"][0].href;
  	console.log(latestPostMediaUrl);
  	document.getElementById('blogPostTitle').innerHTML = `<a class="section__header" href="${latestPost.link}">${latestPost.title.rendered}</a>`;

	// get the latest media
	axios.get(latestPostMediaSource)
	.then(function(response){
		latestPostMediaUrl = response.data.source_url;
		// remove aspect ratio of image
		document.getElementById('blogPostImage').classList.remove('is-square');
		document.getElementById('blogPostImage').innerHTML = `<a href="${latestPost.link}"><img src="${latestPostMediaUrl}"></a>`;
	})
	.catch(function(error){

	});
  })
  .catch(function (error) {
    console.log(error);
  });