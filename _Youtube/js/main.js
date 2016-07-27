var Search = function(){
    
    this.apiKey = 'AIzaSyDMEgyECScLdhmGq-YcNFFQ2HFawNstPCw';
    this.defaultSearchterm = 'svensven2011 degraw grenade smiths';
    this.nextPageToken = '';
    this.pageCount = 1;
    this.resultsPerPage = 12;

    this.getResults = function(command){
        var obj = this;
        if(command == 'add'){
            this.pageCount = 1;
        }
        $.get( this.url(), function( data ) {
            var content = '<div class="row" data-token="'+data.nextPageToken+'">';
            content += '<div class="col-xs-12 pagenum">Page '+obj.pageCount+'</div>';
            var itemCount = 0;
            for(item in data.items){
                var s = data.items[item].snippet;
                var link = 'http://youtu.be/'+data.items[item].id.videoId;
                content += '<div class="col-sm-6 col-md-4">';
                content += '<a href="'+link+'" target="_blank">';
                content += '<img src="'+s.thumbnails.default.url+'" alt="'+s.title+'" />';
                content += '<h2>'+s.title+'</h2>';
                content += '</a></div>';
                itemCount++;

            }
            content += '</div>';
            switch(command){
                case 'add':
                    $('#searchResults').html(content);
                break;
                case 'append':
                    $('#searchResults').append(content);
                break;
            }
            obj.pageCount++;
            if(parseInt(itemCount) == 12){
                $('.btn-more').removeClass('hidden');
            }
            $('#searchbox').attr('value', '');
        });
    }

    this.rawsearchterm = function(){
        return decodeURIComponent($('#searchbox').val());
    }

    this.searchterm = function(){
        return encodeURIComponent($('#searchbox').val());
    }

    this.url = function(){
        var url = 'https://www.googleapis.com/youtube/v3/search';
        url += '?part=snippet';
        url += '&type=video';
        url+= '&q='+this.searchterm();
        url += '&key='+this.apiKey;
        url += '&maxResults='+this.resultsPerPage;
        if(this.nextPageToken !== ''){
            url += '&pageToken='+this.nextPageToken;
        }
        return url;
    }

    this.updateRecent = function(searchterm){
        this.pageCount = 1;
        var obj = this;
        /*if($('#navbar .nav li').length == 5){
           $('#navbar .nav li:first-child').remove(); 
        }*/
        $('#navbar .nav').append('<li><a href="#">'+this.rawsearchterm()+'</a></li>');
        $('#navbar li a').unbind('click').on('click', function(){
            $('#searchbox').val($(this).text());
            obj.getResults('add');
        });
    }

    
}

//Runs when google client api has loaded
function googleApiClientReady(){

    //Ensure page has loaded properly
    $(document).ready(function(){
        
        var $search = new Search();

        //Show results when search form is submitted
        $('#searchform').submit(function(e){
            e.preventDefault();
            if($('#searchbox').val() !== ''){
                $search.updateRecent();
                $search.getResults('add');
            }
            
        });

        
        //Add default searchterm to input box if none exists
        if($search.searchterm() === ''){
            $('#searchbox').attr('value', $search.defaultSearchterm);
        }
        //Perform first search on load
        $search.updateRecent();
        $search.getResults('add');

        //Load more results
        $('.btn-more').on('click', function(){
            var token = $('#searchResults .row:last-child').attr('data-token');
            $search.nextPageToken = token;
            $search.getResults('append');
        });

        // Only enable if the document has a long scroll bar
        // Note the window height + offset
        if ( ($(window).height() + 100) < $(document).height() ) {
            $('#top-link-block').removeClass('hidden').affix({
                // how far to scroll down before link "slides" into view
                offset: {top:100}
            });
        }
    });
}
