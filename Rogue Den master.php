<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no"/>
<title>The Rougue Den Chat</title>
 <meta name="description" content="a troll free chat with 24 hour mods and admin.">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Loading the jScrollPane CSS, along with the styling of the
     chat in chat.css and the rest of the page in page.css -->

<link rel="stylesheet" type="text/css" href="js/jScrollPane/jScrollPane.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/chat.css" />

</head>

<body>
div#ritchierich_tools{
    margin:0;padding:0;
    width					: auto;
    min-height				: 11em;
    background-color		:#36393D;
}
div#ritchierich_tools ,
div#ritchierich_tabcontainer{
}
div#ritchierich_chanContainer{
    background-color: #ECECEA;
    height          : 25em;
}
div#ritchierich_usercolors{
    margin:0; padding:0;
    display					: none;
}
div#ritchierich_colorlist {
    margin:0; padding:0;
    display					: none;
}
div.channel{
    margin: 0;padding: 0;
    position:relative;
    background-image        : url('./images/textarea.png');
    background-repeat       : no-repeat;
    background-position     : 75% 97%;
    background-color        : #EEEEEE;
    border-left             : 1px solid #bbbdbe;
    width                   : 100%;
    height                  : 25em;
    border-right            : 1px solid #bbbdbe;

}
ul.ritchierich_textarea{
    /*margin: 0;padding: 0;*/

    /*background-color		: #EBEBEB;
    background-image		: url('../../images/textarea.png');
    background-repeat		: no-repeat;
    background-position		: 96% 50%;*/
    /*width				    : 78.1%;
    height                  : 25em;
    border-right			: 1px solid #bbbdbe;
    overflow			    : auto;
    overflow-x			    : hidden;*/

      margin:0px;
      padding:0px;
      position:absolute;
      bottom:0px; 
      left:0px;
      width:78.2%;
      overflow:hidden;
      overflow-y:scroll;
}
ul.ritchierich_textarea li{
    margin:0;padding:0;
    list-style: none;
    text-decoration: none;
    margin-bottom			:0.7em;
    margin-left				:1.5em;
}
/*****nick whois************/
div.ritchierich_nickwhois{
    padding: 0; margin: 0;
    padding					: 1em;
    min-width				: 18em;
    /*background-image		: url('../images/world.png');
    background-repeat		: no-repeat;
    background-position		: center;*/
    font-size				: 90%;
    -webkit-border-radius	: 10px;
    -moz-border-radius		: 10px;
    border-radius			: 10px;
    background				: #CCCCCC;
    background				: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
    background				: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
    filter					: progid:DXImageTransform.Microsoft.gradient(startColorstr='#EEEEEE', endColorstr='#CCCCCC'); /* for IE <= 9 */
    background				: linear-gradient(to bottom, #EEEEEE, #CCCCCC);/*ie10*/
    -webkit-box-shadow		: 0px 0px 8px rgba(0, 0, 0, 0.3);
    -moz-box-shadow			: 0px 0px 8px rgba(0, 0, 0, 0.3);
    box-shadow				: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
div.ritchierich_nickwhois a {
    text-decoration                               : none;
    display                                       : block;
}
div.ritchierich_nickwhois a:hover {
    text-decoration                               : underline;
    cursor					: pointer;
    color						: #356AA0;
}
div.ritchierich_nickwhois a img { border: none; }
p.ritchierich_nickwhois_header {
    margin: 0; padding: 0;
    background-color			: #6DBDD6;
    border-bottom				: 1px solid #444;
    text-align				: center;
    font-weight				: bold;
    vertical-align			: middle;
}
div#pic header{
    text-align                          :center;
}
img.ritchierich_close{
    float					: left;
    cursor					: pointer;
    vertical-align          : middle;
    margin					: 3px 0 3px 2px;

}
p.ritchierich_nickwhois_ip{
    text-align				: center;
    color					: #3F4C6B;
}
/*************** lists ***********************************/
div.ritchierich_userlist{
    margin: 0;padding: 0;
    float				    :	right;
    /*background-image		:	url('../../images/nicklist.png');
    background-repeat		: 	no-repeat;
    background-position		: 	bottom;
    background-color        :   #F6F6F6;*/
    border-left				:   1px solid #413546;
    width					:   21.5%;
    overflow				:   auto;
    height                  :   25em;
    overflow-x				:   hidden;
}
ul.ritchierich_textarea a.nickRef{
    text-decoration                             : none;
    padding                                 : 0.5em;
    cursor					: pointer;
}
div.ritchierich_user{
    padding                 : 0;margin:0;
    margin					: 10px 0 4px 0;
    border-bottom           : 1px solid #AAA;
    width					: 100%;
    height					: 30px;
    background-image                        : none;
}
div.ritchierich_user a{
    color					:#000;
    text-decoration                         :none;
    cursor					: pointer;
    margin-left				:6px;
}
img.user_emo{
    margin: 0; padding: 0;
    float					:left;
    border					:none;
    /*margin-top:-3px;*/
    margin-left				:12px;
}
/** Profile area **/

ul.ritchierich_userPorfile{
    list-style-type: none;
    padding: 0px;
    margin: 0px;
}
ul.ritchierich_userPorfile li{
    background-image: url('./images/sqpurple.gif');
    background-repeat: no-repeat;
    background-position: 0px 5px;
    padding-left: 14px;
}
/************ text area **************************************/

textarea#ritchierich_msgfield{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    height: 3em;
    width: 100%;
}
/****************smilyes********************************/
div#ritchierich_smiley_container {
    margin: 0; padding: 0;
    margin-left				: 1em;
    margin-right				: 1em;
    width					: auto;
    background-color			: #FFF;
    border				: 1px solid #555;
    padding				: 4px;

}
div#ritchierich_smiley_container img.ritchierich_smileys {
    margin: 0; padding: 0;
    margin-right			: 5px;
    cursor				    : pointer;
    vertical-align			: middle;
}

/*-----------------system names-------------------------*/
span.sys_name{
    color					: #FF0084;
    font-style				: italic;
}
span.userJoin{
    color                                       : #73880A;
    font-style                                  : italic;
}
span.announcement{
    color					: #890E0E;
    font-style                                  : italic;
}
span.userLef{
    color					: #CC0000;
    font-style                                  : italic;
}
span.userBan ,
span.userKick,
span.userGagg,
span.userUngagged{
    color					: #CC0000;
    font-style				: italic;
}
span.sys_msg_setaway{
    color					: #bebebe;
    font-style				: italic;
}
span.ritchierich_date{
    float					: right;
    color					: #bebebe;
    font-size                                   : 70%;
}
div.ritchierich_message{
    width					:98%;
    margin-bottom                           :0.5em;
    margin-left				:1.5em;
}
/*****************buttons*************************************************/
div#ritchierich_button_container{
    margin-left			: 1em;
    margin-right			: 1em;
}
div.ritchierich_btn{
    margin: 0; padding: 0;
    display				: inline;
    cursor				: pointer;
}
div.ritchierich_btn img {
    margin: 0; padding: 2px; border: none;
    vertical-align			: middle;
}

</div>

<!-- Loading jQuery, the mousewheel plugin and jScrollPane, along with our script.js -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jScrollPane/jquery.mousewheel.js"></script>
<script src="js/jScrollPane/jScrollPane.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
require "classes/DB.class.php";
require "classes/Chat.class.php";
require "classes/ChatBase.class.php";
require "classes/ChatLine.class.php";
require "classes/ChatUser.class.php";

session_name('webchat');
session_start();

if(get_magic_quotes_gpc()){

    // If magic quotes is enabled, strip the extra slashes
    array_walk_recursive($_GET,create_function('&$v,$k','$v = stripslashes($v);'));
    array_walk_recursive($_POST,create_function('&$v,$k','$v = stripslashes($v);'));
}

try{

    // Connecting to the database
    DB::init($dbOptions);

    $response = array();

    // Handling the supported actions:

    switch($_GET['action']){

        case 'login':
            $response = Chat::login($_POST['name'],$_POST['email']);
        break;

        case 'checkLogged':
            $response = Chat::checkLogged();
        break;

        case 'logout':
            $response = Chat::logout();
        break;

        case 'submitChat':
            $response = Chat::submitChat($_POST['chatText']);
        break;

        case 'getUsers':
            $response = Chat::getUsers();
        break;

        case 'getChats':
            $response = Chat::getChats($_GET['lastID']);
        break;

        default:
            throw new Exception('Wrong action');
    }

    echo json_encode($response);
}
catch(Exception $e){
    die(json_encode(array('error' => $e->getMessage())));
}



class DB {
	private static $instance;
	private $MySQLi;

	private function __construct(array $dbOptions){

		$this->MySQLi = @ new mysqli(	$dbOptions['db_host'],
										$dbOptions['db_user'],
										$dbOptions['db_pass'],
										$dbOptions['db_name'] );

		if (mysqli_connect_errno()) {
			throw new Exception('Database error.');
		}

		$this->MySQLi->set_charset("utf8");
	}

	public static function init(array $dbOptions){
		if(self::$instance instanceof self){
			return false;
		}

		self::$instance = new self($dbOptions);
	}

	public static function getMySQLiObject(){
		return self::$instance->MySQLi;
	}

	public static function query($q){
		return self::$instance->MySQLi->query($q);
	}

	public static function esc($str){
		return self::$instance->MySQLi->real_escape_string(htmlspecialchars($str));
	}
}
/* This is the base class, used by both ChatLine and ChatUser */

class ChatBase{

    // This constructor is used by all the chat classes:

    public function __construct(array $options){

        foreach($options as $k=>$v){
            if(isset($this->$k)){
                $this->$k = $v;
            }
        }
    }
}
* Chat line is used for the chat entries */

class ChatLine extends ChatBase{

    protected $text = '', $author = '', $gravatar = '';

    public function save(){
        DB::query("
            INSERT INTO webchat_lines (author, gravatar, text)
            VALUES (
                '".DB::esc($this->author)."',
                '".DB::esc($this->gravatar)."',
                '".DB::esc($this->text)."'
        )");

        // Returns the MySQLi object of the DB class

        return DB::getMySQLiObject();
    }
}
class ChatUser extends ChatBase{

    protected $name = '', $gravatar = '';

    public function save(){

        DB::query("
            INSERT INTO webchat_users (name, gravatar)
            VALUES (
                '".DB::esc($this->name)."',
                '".DB::esc($this->gravatar)."'
        )");

        return DB::getMySQLiObject();
    }

    public function update(){
        DB::query("
            INSERT INTO webchat_users (name, gravatar)
            VALUES (
                '".DB::esc($this->name)."',
                '".DB::esc($this->gravatar)."'
            ) ON DUPLICATE KEY UPDATE last_activity = NOW()");
    }
}
/* The Chat class exploses public static methods, used by ajax.php */

class Chat{

    public static function login($name,$email){
        if(!$name || !$email){
            throw new Exception('Fill in all the required fields.');
        }

        if(!filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
            throw new Exception('Your email is invalid.');
        }

        // Preparing the gravatar hash:
        $gravatar = md5(strtolower(trim($email)));

        $user = new ChatUser(array(
            'name'        => $name,
            'gravatar'    => $gravatar
        ));

        // The save method returns a MySQLi object
        if($user->save()->affected_rows != 1){
            throw new Exception('This nick is in use.');
        }

        $_SESSION['user']    = array(
            'name'        => $name,
            'gravatar'    => $gravatar
        );

        return array(
            'status'    => 1,
            'name'        => $name,
            'gravatar'    => Chat::gravatarFromHash($gravatar)
        );
    }

    public static function checkLogged(){
        $response = array('logged' => false);

        if($_SESSION['user']['name']){
            $response['logged'] = true;
            $response['loggedAs'] = array(
                'name'        => $_SESSION['user']['name'],
                'gravatar'    => Chat::gravatarFromHash($_SESSION['user']['gravatar'])
            );
        }

        return $response;
    }

    public static function logout(){
        DB::query("DELETE FROM webchat_users WHERE name = '".DB::esc($_SESSION['user']['name'])."'");

        $_SESSION = array();
        unset($_SESSION);

        return array('status' => 1);
    }
    public static function submitChat($chatText){
        if(!$_SESSION['user']){
            throw new Exception('You are not logged in');
        }

        if(!$chatText){
            throw new Exception('You haven\' entered a chat message.');
        }

        $chat = new ChatLine(array(
            'author'    => $_SESSION['user']['name'],
            'gravatar'    => $_SESSION['user']['gravatar'],
            'text'        => $chatText
        ));

        // The save method returns a MySQLi object
        $insertID = $chat->save()->insert_id;

        return array(
            'status'    => 1,
            'insertID'    => $insertID
        );
    }

    public static function getUsers(){
        if($_SESSION['user']['name']){
            $user = new ChatUser(array('name' => $_SESSION['user']['name']));
            $user->update();
        }

        // Deleting chats older than 5 minutes and users inactive for 30 seconds

        DB::query("DELETE FROM webchat_lines WHERE ts < SUBTIME(NOW(),'0:5:0')");
        DB::query("DELETE FROM webchat_users WHERE last_activity < SUBTIME(NOW(),'0:0:30')");

        $result = DB::query('SELECT * FROM webchat_users ORDER BY name ASC LIMIT 18');

        $users = array();
        while($user = $result->fetch_object()){
            $user->gravatar = Chat::gravatarFromHash($user->gravatar,30);
            $users[] = $user;
        }

        return array(
            'users' => $users,
            'total' => DB::query('SELECT COUNT(*) as cnt FROM webchat_users')->fetch_object()->cnt
        );
    }

    public static function getChats($lastID){
        $lastID = (int)$lastID;

        $result = DB::query('SELECT * FROM webchat_lines WHERE id > '.$lastID.' ORDER BY id ASC');

        $chats = array();
        while($chat = $result->fetch_object()){

            // Returning the GMT (UTC) time of the chat creation:

            $chat->time = array(
                'hours'        => gmdate('H',strtotime($chat->ts)),
                'minutes'    => gmdate('i',strtotime($chat->ts))
            );

            $chat->gravatar = Chat::gravatarFromHash($chat->gravatar);

            $chats[] = $chat;
        }

        return array('chats' => $chats);
    }

    public static function gravatarFromHash($hash, $size=23){
        return 'http://www.gravatar.com/avatar/'.$hash.'?size='.$size.'&default='.
                urlencode('http://www.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?size='.$size);
    }
}
}
/* Overriding the default styles of jScrollPane */

.jspVerticalBar{
    background:none;
    width:20px;
}

.jspTrack{
    background-color:#202020;
    border:1px solid #111111;
    width:3px;
    right:-10px;
}

.jspDrag {
    background:url('../img/slider.png') no-repeat;
    width:20px;
    left:-9px;
    height:20px !important;
    margin-top:-5px;
}

.jspDrag:hover{
    background-position:left bottom;
}

/* Additional styles */

}
    },

    // Init binds event listeners and sets up timers:

    init : function(){

        // Using the defaultText jQuery plugin, included at the bottom:
        $('#name').defaultText('Nickname');
        $('#email').defaultText('Email (Gravatars are Enabled)');

        // Converting the #chatLineHolder div into a jScrollPane,
        // and saving the plugin's API in chat.data:

        chat.data.jspAPI = $('#chatLineHolder').jScrollPane({
            verticalDragMinHeight: 12,
            verticalDragMaxHeight: 12
        }).data('jsp');

        // We use the working variable to prevent
        // multiple form submissions:

        var working = false;

        // Logging a person in the chat:

        $('#loginForm').submit(function(){

            if(working) return false;
            working = true;

            // Using our tzPOST wrapper function
            // (defined in the bottom):

            $.tzPOST('login',$(this).serialize(),function(r){
                working = false;

                if(r.error){
                    chat.displayError(r.error);
                }
                else chat.login(r.name,r.gravatar);
            });

            return false;
        });
  // Submitting a new chat entry:

        $('#submitForm').submit(function(){

            var text = $('#chatText').val();

            if(text.length == 0){
                return false;
            }

            if(working) return false;
            working = true;

            // Assigning a temporary ID to the chat:
            var tempID = 't'+Math.round(Math.random()*1000000),
                params = {
                    id            : tempID,
                    author        : chat.data.name,
                    gravatar    : chat.data.gravatar,
                    text        : text.replace(/</g,'&lt;').replace(/>/g,'&gt;')
                };

            // Using our addChatLine method to add the chat
            // to the screen immediately, without waiting for
            // the AJAX request to complete:

            chat.addChatLine($.extend({},params));

            // Using our tzPOST wrapper method to send the chat
            // via a POST AJAX request:

            $.tzPOST('submitChat',$(this).serialize(),function(r){
                working = false;

                $('#chatText').val('');
                $('div.chat-'+tempID).remove();

                params['id'] = r.insertID;
                chat.addChatLine($.extend({},params));
            });

            return false;
        });

        // Logging the user out:

        $('a.logoutButton').live('click',function(){

            $('#chatTopBar > span').fadeOut(function(){
                $(this).remove();
            });

            $('#submitForm').fadeOut(function(){
                $('#loginForm').fadeIn();
            });

            $.tzPOST('logout');

            return false;
        });

        // Checking whether the user is already logged (browser refresh)

        $.tzGET('checkLogged',function(r){
            if(r.logged){
                chat.login(r.loggedAs.name,r.loggedAs.gravatar);
            }
        });

        // Self executing timeout functions

        (function getChatsTimeoutFunction(){
            chat.getChats(getChatsTimeoutFunction);
        })();

        (function getUsersTimeoutFunction(){
            chat.getUsers(getUsersTimeoutFunction);
        })();

    },
// The login method hides displays the
    // user's login data and shows the submit form

    login : function(name,gravatar){

        chat.data.name = name;
        chat.data.gravatar = gravatar;
        $('#chatTopBar').html(chat.render('loginTopBar',chat.data));

        $('#loginForm').fadeOut(function(){
            $('#submitForm').fadeIn();
            $('#chatText').focus();
        });

    },

    // The render method generates the HTML markup
    // that is needed by the other methods:

    render : function(template,params){

        var arr = [];
        switch(template){
            case 'loginTopBar':
                arr = [
                '<span><img src="',params.gravatar,'" width="23" height="23" />',
                '<span class="name">',params.name,
                '</span><a href="" class="logoutButton rounded">Logout</a></span>'];
            break;

            case 'chatLine':
                arr = [
                    '<div class="chat chat-',params.id,' rounded"><span class="gravatar">'+
                    '<img src="',params.gravatar,'" width="23" height="23" '+
                    'onload="this.style.visibility=\'visible\'" />',
                    '</span><span class="author">',params.author,
                    ':</span><span class="text">',params.text,
                    '</span><span class="time">',params.time,'</span></div>'];
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            break;

            case 'user':
                arr = [
                    '<div class="user" title="',params.name,'"><img src="',params.gravatar,
                    '" width="30" height="30" onload="this.style.visibility=\'visible\'"'+
                    ' /></div>'
                ];
            break;
        }

        // A single array join is faster than
        // multiple concatenations

        return arr.join('');

    },
// The addChatLine method ads a chat entry to the page

    addChatLine : function(params){

        // All times are displayed in the user's timezone

        var d = new Date();
        if(params.time) {

            // PHP returns the time in UTC (GMT). We use it to feed the date
            // object and later output it in the user's timezone. JavaScript
            // internally converts it for us.

            d.setUTCHours(params.time.hours,params.time.minutes);
        }

        params.time = (d.getHours() < 10 ? '0' : '' ) + d.getHours()+':'+
                      (d.getMinutes() < 10 ? '0':'') + d.getMinutes();

        var markup = chat.render('chatLine',params),
            exists = $('#chatLineHolder .chat-'+params.id);

        if(exists.length){
            exists.remove();
        }

        if(!chat.data.lastID){
            // If this is the first chat, remove the
            // paragraph saying there aren't any:

            $('#chatLineHolder p').remove();
        }

        // If this isn't a temporary chat:
        if(params.id.toString().charAt(0) != 't'){
            var previous = $('#chatLineHolder .chat-'+(+params.id - 1));
            if(previous.length){
                previous.after(markup);
            }
            else chat.data.jspAPI.getContentPane().append(markup);
        }
        else chat.data.jspAPI.getContentPane().append(markup);

        // As we added new content, we need to
        // reinitialise the jScrollPane plugin:

        chat.data.jspAPI.reinitialise();
        chat.data.jspAPI.scrollToBottom(true);

    },
// This method requests the latest chats
    // (since lastID), and adds them to the page.

    getChats : function(callback){
        $.tzGET('getChats',{lastID: chat.data.lastID},function(r){

            for(var i=0;i<r.chats.length;i++){
                chat.addChatLine(r.chats[i]);
            }

            if(r.chats.length){
                chat.data.noActivity = 0;
                chat.data.lastID = r.chats[i-1].id;
            }
            else{
                // If no chats were received, increment
                // the noActivity counter.

                chat.data.noActivity++;
            }

            if(!chat.data.lastID){
                chat.data.jspAPI.getContentPane().html('<p class="noChats">No chats yet</p>');
            }

            // Setting a timeout for the next request,
            // depending on the chat activity:

            var nextRequest = 1000;

            // 2 seconds
            if(chat.data.noActivity > 3){
                nextRequest = 2000;
            }

            if(chat.data.noActivity > 10){
                nextRequest = 5000;
            }

            // 15 seconds
            if(chat.data.noActivity > 20){
                nextRequest = 15000;
            }

            setTimeout(callback,nextRequest);
        });
    },

    // Requesting a list with all the users.

    getUsers : function(callback){
        $.tzGET('getUsers',function(r){

            var users = [];

            for(var i=0; i< r.users.length;i++){
                if(r.users[i]){
                    users.push(chat.render('user',r.users[i]));
                }
            }

            var message = '';

            if(r.total<1){
                message = 'No one is online';
            }
            else {
                message = r.total+' '+(r.total == 1 ? 'person':'people')+' online';
            }

            users.push('<p class="count">'+message+'</p>');

            $('#chatUsers').html(users.join(''));

            setTimeout(callback,15000);
        });
    },
/ This method displays an error message on the top of the page:

    displayError : function(msg){
        var elem = $('<div>',{
            id        : 'chatErrorMessage',
            html    : msg
        });

        elem.click(function(){
            $(this).fadeOut(function(){
                $(this).remove();
            });
        });

        setTimeout(function(){
            elem.click();
        },5000);

        elem.hide().appendTo('body').slideDown();
    }
};

// Custom GET & POST wrappers:

$.tzPOST = function(action,data,callback){
    $.post('php/ajax.php?action='+action,data,callback,'json');
}

$.tzGET = function(action,data,callback){
    $.get('php/ajax.php?action='+action,data,callback,'json');
}

// A custom jQuery method for placeholder text:

$.fn.defaultText = function(value){

    var element = this.eq(0);
    element.data('defaultText',value);

    element.focus(function(){
        if(element.val() == value){
            element.val('').removeClass('defaultText');
        }
    }).blur(function(){
        if(element.val() == '' || element.val() == value){
            element.addClass('defaultText').val(value);
        }
    });

    return element.blur();
}