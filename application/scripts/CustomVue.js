

!Vue.component('GamePost', {
	template: '#comment-template',
	props: ['commentpost']
});

var body = new Vue({
	el: '#app',
	data: {
		newComment: '',
		comments: [

		]
	},
	methods: {

		getComments:function () {
			$.get("http://localhost:8080/GameReviewV2/index.php/get_comments", function (data) {
				console.log(data);
				body.comments.push(data);
			})
		},

		setComment: function() {
			const newCommentObj = {
				text: this.newComment,

			};
			//Send the comment object to CodeIgniter.
			//jquery..ajax...post
			$.post("http://localhost:8080/GameReviewV2/index.php/set_comments",newCommentObj)
				.done(function (data) {
					console.log(newCommentObj);
					console.log(data);
					body.comments.push(newCommentObj);

				})

			//In your CodeIgniter specify a route to a function (in a controller) that accepts the input->post...
			this.newComment = ''
		},
	}
});

//client side

// $('#sendbutton').click(function () {
//  var comment = $('comments').val();
//  $('#commentSpace').append(comment + "<br>");
// console.log($('#commentSpace').append(comment + "<br>"));
//
// });

// var username = document.getElementById("username").value;

// $(document).ready(function(){
// 		$('#addComment').on('click',function(event)
// 			{
// 				var $inputComment = $("#app").find('textarea').val();
// 				$('#app').append(showComments).append("lee" + ": " + $inputComment + "<hr class='bg-dark'>" + "<br>");
// 			}
// 		);
//
// 	}
// );

// $('#sendbutton').click(function() {
// 	var name = $('#comments').val();
// 	var text = document.getElementById('text').innerHTML = name;
//
// });

//
// var body = new Vue ({
// 	el: '#app',
// 	data:{
// 		headings:'comments sections',
// 		newComment:'',
// 		Addcomments:[
// 			{
// 				'Userscomments' : 'Your game sucks','Fifacomments':'This game is fustrating'
//  			}
// 		],
// 		newComments:[]
// 	},
// 	created(){
//  		// this.getComments();
// 		// this.generateHeading();
// 	},
// 	methods:{
// 		generateHeading:function(){
//  			this.heading = 'Comments Section'
// 		},
// 		getComments:function () {
// 			$.get("http://localhost:8080/GameReviewV2/index.php/get_comments",function(data) {
// 				console.log(data);
// 				body.Addcomments.push(data);
// 			})
// 		},
//
// 		setComments:function(thisComments)
// 		{
// 			// Genereate a list entry based on the parameter values we receive.
// 			var postComment= {'comment' : thisComments}
// 			var usersComment = {usersComment:postComment}
// 			// Log the data to the console during development.
// 			console.log(postData)
// 			// Send the post jQuery, the first parameter is the URL and the second is the data we wish to send
// 			$.post("http://localhost:8080/GameReviewV2/index.php/set_comments", postComment)
// 				.done(function(data)
// 				{
// 					// When the data sends successfuly, log the data in the browser
// 					console.log(data);
// 					// Add the data to the end of your list.
// 					body.Addcomments.push(usersComment);
// 				})
// 		},
//
// 		},
//
// 		clearComments:function () {
// 			this.comments = ''
// 		}
// })




