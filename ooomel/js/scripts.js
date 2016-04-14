var persons = [
     'Jhon'
    ,'Nill'
];


function CommentManager() {
    //
    // this = {}
    var commentsQnty_ = 0;
    var comments = [ //:Comment[]
           
    ];
    
    
    function Comment(_person, _content,  _lvl , _parent) {
        //
        // this = {}
        
        this.id = commentsQnty_;
        this.parentId = _parent || 0;
        this.level = _lvl || 0;
        this.likesNum = 0;
        
        this.person  = _person;     //строка?
        this.content = _content;    //строка?
        
        
        this.likeIt = function(){
            ++this.likesNum;
        }
        
        this.response = function() {
            
            
        }
        
        //return this
    }
    
    
    
    
    this.newComment = function( _person, _content, _lvl , _parent){
        
        //validation:
        if (_lvl === 0) _parent = 0;
        else if (_lvl > 1) {
            
            console.log ('Ошибка 1234');
            
            return;
        }
        
        
        //var person_ = person;
        //var content_ = content;
        
        comments.push( new Comment(_person, _content, _lvl, _parent) );
        
        ++commentsQnty_;
    }
    this.getComment = function(_comment_idx) {
        
        return comments[_comment_idx];
        
    }
    this.consoleComments = function(_cons_tag) {
        console.log(_cons_tag, commentsQnty_ );
        console.log(_cons_tag, comments);
    }
    this.drawComments = function() {
        $(document).ready(function(){
                          
            $('<p>').text(commentsQnty_).appendTo('body');
            
            //document.write('<style> td { color: #F40 } </style>');
            
            
            //первый уровень [0]
            for( var i=0, l=comments.length; i<l; ++i ) {
                
                
                var commentTemp = comments[i];
                
                if( commentTemp.level  === 0 ){
                    
                    console.log(34, commentTemp);
                    
                    //разница?!
                    //$('<div>').appendTo('body').text(commentTemp.content);
                    $('<div>').attr('data-id' , commentTemp.id )
                        .text(commentTemp.content).appendTo('body');
                    
                }
                
            }
            //второй уровень [1]
            for( var i=0, l=comments.length; i<l; ++i ) {
                
                
                var commentTemp = comments[i];
                
                if( commentTemp.level  === 1 ){
                    
                    console.log(34, commentTemp.parentId);
                    
                    //разница?!
                    //$('<div>').appendTo('body').text(commentTemp.content);
                    $('<div class="second_com">').text(commentTemp.content)
                        .insertAfter('[data-id="'+ commentTemp.parentId +'"]');
                    
                }
                
            }
            
        });
    }
    
    
    
    //return this
}


var commentManager1 = new CommentManager();

commentManager1.newComment(persons[0] , 'Content#1: lallal.');
commentManager1.newComment(persons[1] , 'Content#2: lallal.' , 1 , 0);
commentManager1.newComment(persons[1] , 'Content#3: lallal.');
commentManager1.newComment(persons[0] , 'Content#4: lallal.');


var comment1 = commentManager1.getComment(1);

console.log(comment1);

comment1.likeIt();
comment1.likeIt();
comment1.likeIt();
comment1.likeIt();

console.log(comment1);


console.log(3, commentManager1);
commentManager1.consoleComments(1);
commentManager1.drawComments(1);




//второй пулл комментов:
var commentManager2 = new CommentManager();

commentManager2.consoleComments(2);

