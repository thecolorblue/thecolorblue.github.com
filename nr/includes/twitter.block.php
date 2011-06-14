<div class="box">
        <ul id="content">
          <span id="load">Loading...</span>
        </ul>
          <script id="tweets" type="text/x-jquery-tmpl">
            <li>
              <h2> ${username}</h2>
              <img src="${userimg}" alt="${username}" align="left"/>
              <p>${tweet}</p>
              {{if geo}}
                <span>${geo}</span>
              {{/if}}
            </li>
          </script>
          <script>
            $.ajax({
              type : 'GET',
              dataType : 'jsonp',
              url : 'http://search.twitter.com/search.json?q=nettuts',
              success : function(tweets) {
                $('#load').hide();
                var twitter = $.map(tweets.results, function(obj, index) {
                  return {
                    username : obj.from_user,
                    tweet : obj.text,
                    userimg : obj.profile_image_url,
                    geo : obj.geo
                  };
                });
                $('#tweets').tmpl(twitter).appendTo('#content');
              }
            });
            </script>
</div>