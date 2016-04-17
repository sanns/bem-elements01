//Console .log
//
SANZDEBUG = 1;

function log1() {
    if (SANZDEBUG == 1)
        console.log(arguments);

}




var persons = [
     'Jhon'
    ,'Nill'
];


function CommentManager(_unique_new_class) {
    //
    // this = {}
    var self = this; //для функций, которым нужен this, но которые нельзя помещать в this[...] .
    
    var commentsQnty_ = 0;
    var commentsIncrement_ = 0; //не предназначен для уменьшения, в отличие от commentsQnty_;
    var comments = [ //:Comment[]
           
    ];
    var commentsBlock; //jquery object
    var textarea;
    
    log1(37, _unique_new_class);
    
    
    function Comment(_person, _content,  _lvl , _parent) {
        //
        // this = {}
        
        //TODO может лучше спрятать?
        this.id = commentsIncrement_;
        this.parentId = _parent || 0;
        this.level = _lvl || 0;
        this.likesNum = 0;
        this.personsLiked = {};
        
        this.person  = _person;     //строка?
        this.content = _content;    //строка?
        
        
        
        this.likeIt = function(_person , undefined){//тот, кто лайкает, а не создает комент
            if (this.personsLiked[_person] === undefined) {
                this.personsLiked[_person] = true;
                ++this.likesNum;
            }
        }
        
        this.response = function() {
            
            
        }
        
        //return this
    }
    
    
    
    
    this.newComment = function( _person, _content, _lvl , _parent){
        if (_content == '') return;
        
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
        ++commentsIncrement_;
    }
    this.getComment = function(_comment_idx) {
        //по индексу в массиве
        
        return comments[_comment_idx];
        
    }
    this.getCommentById = function(_comment_id) {
        //вернет комментарий по id , или undefined
        _comment_id*=1;
        
        
        for( var i=0, l=comments.length; i<l; ++i ) {
            if( comments[i].id  === _comment_id ){
                
                var commentTemp = comments[i];
                
                
                
            }

        }
        
        return commentTemp;
    }
    this.consoleComments = function(_cons_tag) {
        console.log(_cons_tag, commentsQnty_ );
        console.log(_cons_tag, comments);
    }
    function createCommentsBlock(_unique_new_class) {
        
        commentsBlock = $('<div>').addClass(_unique_new_class).appendTo('body');
        self.drawComments();
    }
    function createCommonComment(commentTemp) {
        
        return  $('<div>')
                        .addClass('comment').attr('data-id' , commentTemp.id )
                        .append('<div class="person">'+commentTemp.person)
                        .append('<span>'+commentTemp.content)
                        .append('<div class="likes_qnty">'+commentTemp.likesNum)
                        .append('<button class="likeit">Like '+_unique_new_class+commentTemp.id)
        ;
    }
    this.drawComments = function() {
        $(document).ready(function(){
            commentsBlock.empty();
                          
            $('<p>').text('Posts : '+ commentsQnty_).appendTo(commentsBlock);
            
            //document.write('<style> td { color: #F40 } </style>');
            
            
            //первый уровень [0]
            for( var i=0, l=comments.length; i<l; ++i ) {
                
                
                var commentTemp = comments[i];
                
                if( commentTemp.level  === 0 ){
                    
                    
                    
                    createCommonComment(commentTemp)
                        .append('<button class="respond">Respond')    
                        .appendTo(commentsBlock);
                    
                }
             
                
                if( commentTemp.level  === 1 ){
                    
                    
                    createCommonComment(commentTemp)
                        .addClass('second_com')
                        .insertAfter(
                        commentsBlock.find('[data-id="'+ commentTemp.parentId +'"]')
                    );
                    
                }
                
            }
            
            textarea = $('<textarea>').appendTo(commentsBlock);
            $('<button class="send_cmnt">Send comment</button>').appendTo(commentsBlock);
            
        });
    }
    
    
    
    
    
    
    //createCommentsBlock.call(this, _unique_new_class);
    createCommentsBlock(_unique_new_class);
    
    
    
    //Обработчики:
    //
    //TODO поместить внутрь класса Manager, и локализовать инпуты относительно конкретного блока  комментариев.
    //TODO сделать, чтоб обработчики ставились на document только при создании первого блока.
    $(document).ready(function(){

    });
    $(commentsBlock).on('click', '.likeit', function() { //! Здесь кнопка likeit Никак не связана с self!
        var $thisClkLk = $(this);

        log1(41,$thisClkLk);
        
        var commentClicked$ = $thisClkLk.closest('.comment')
        , commentClickedId = commentClicked$.attr('data-id');

        
        var commentClickedObj = self.getCommentById(commentClickedId);
        
        log1(41,commentClickedObj);

        commentClickedObj.likeIt(persons[0]);
        self.drawComments();

    });
    $(commentsBlock).on('click', '.response', function() {
        var $thisClkRsp = $(this);
    });
    $(commentsBlock).on('click', '.send_cmnt', function() {
        var $thisClkSend = $(this);

        var commentText = textarea.val();


        self.newComment(persons[0] , commentText);
        self.drawComments();
    });
    
    
    
    log1(36, _unique_new_class);
    //return this
}





//Тесты:

var commentManager1 = new CommentManager('comment_mng_1');

commentManager1.newComment(persons[0] , 'Content#1: lallal.');
commentManager1.newComment(persons[1] , 'Content#2: lallal.');
commentManager1.newComment(persons[1] , 'Content#3: lallal.' , 1 , 0);
commentManager1.newComment(persons[0] , 'Content#4: lallal.');


var comment1 = commentManager1.getComment(1);

console.log(comment1);

comment1.likeIt(persons[1]);
comment1.likeIt(persons[1]);
comment1.likeIt(persons[1]);
comment1.likeIt(persons[1]);

console.log(comment1);


console.log(3, commentManager1);
commentManager1.consoleComments(1);
commentManager1.drawComments(1);




//второй пулл комментов:
var commentManager2 = new CommentManager('unique_class_2');

commentManager2.consoleComments(2);



