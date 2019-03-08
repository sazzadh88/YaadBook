@extends('layouts.ui')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="page-header">
            <div class="row">
                <div class="col s12 m9 l9">
                    <h4 class="page-title">Welcome to Yaadbook</h4>
                </div>
                <div class="col s12 m3 l3 center-align">
                    <span class="last-seen right">Last visit:
                        <span id="lblLastseen">2/8/2019 12:24:54 PM</span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m9 l9">
                <div class="shareBtn_group">
                    <div class="share-btn current" data-tab="post">
                        <p class="iconTxt"><i class="material-icons"></i> Write a post</p>
                    </div>
                    <div class="share-btn" data-tab="album">
                        <p class="iconTxt"><i class="material-icons"></i> Create an album</p>
                    </div>
                    <div class="share-btn" data-tab="photo">
                        <p class="iconTxt"><i class="material-icons"></i> Upload a photo</p>
                    </div>
                </div>
                <div id="msgshow" class="alert-box error" style="display:none;">
                    <span id="lblmsg"></span>
                </div>
                <!-- Share a Post -->
                <div id="post" class="shareEdit_Box">
                    <div class="shareEdit_head">
                        <h4 class="shareEdit_title">Write a post</h4>
                        <div class="switch">
                            <label>
                                Public
                                <input type="checkbox" class="csPublishAs">
                                <span class="lever"></span>
                                Private
                            </label>
                        </div>
                    </div>
                    <div class="shareEdit_content">
                        <div class="shareBox_editor">
                            <input type="text" id="txtPostTitle" placeholder="Add title...">
                            <textarea id="txtPostDesc" placeholder="Add content..."></textarea>
                        </div>
                    </div>
                    <div class="shareEdit_footer">
                        <div class="sharefooter_btn">
                            <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat csReset">Discard</a>
                            <a class="modal-action modal-close waves-effect waves-green btn-flat csTimelinePost">Publish</a>
                        </div>
                        <div class="sharefooter_btn">
                            <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat csPostDraft">Save draft</a>

                        </div>
                    </div>
                </div>
                <!-- Create an Album -->
                <div id="album" class="shareEdit_Box">
                    <div class="shareEdit_head">
                        <h4 class="shareEdit_title">Create an album</h4>
                        <div class="switch">
                            <label>
                                Public
                                <input type="checkbox">
                                <span class="lever"></span>
                                Private
                            </label>
                        </div>
                    </div>
                    <div class="shareEdit_content">
                        <div class="shareBox_editor">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <input type="text" id="txtAlbumTitle" placeholder="Album title...">
                                </div>
                                <div class="col s12 m12 l12">
                                    <textarea placeholder="Album description" id="txtDescription"></textarea>
                                </div>
                                <div class="col s12 m3 l3">
                                    <div class="uploadBox">
                                        <div class="uploadImg">
                                            <i class="material-icons">face</i>
                                            <p>Add Photo</p>
                                        </div>
                                        <div class="uploadImg-input">
                                            <input type="file" id="fuimgUpdates">
                                            <input type="hidden" name="hdfImgpath" id="hdfImgpath">
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m9 l9">
                                    <div class="multiUpload" id="divImgUpl"></div>
                                    <!--Its for showing preview images-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shareEdit_footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat csReset">Discard</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat csSubmit">Publish Album</a>
                    </div>
                </div>
                <!-- Add a Photo -->
                <div id="photo" class="shareEdit_Box">
                    <div class="shareEdit_content" style="padding-bottom: 20px;">
                        <div class="shareBox_editor">
                            <div class="upload-header">
                                <h4 class="modal-title shareEdit_title">Upload a photo</h4>
                                <div class="switch">
                                    <label>
                                        Public
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                        Private
                                    </label>
                                </div>

                            </div>
                            <div class="upload-box csUploadbox">
                                <figure>
                                    <img src="../images/file-img.png" alt="">
                                </figure>
                                <h3>Drag your photo here, Or</h3>
                                <div class="waves-effect waves-light btn btn-browse">
                                    Browse


                                </div>
                                <input type="file" id="imgUpdates" class="time-line-upload-browse">
                            </div>
                            <input type="hidden" name="hdfphotoImgpaths" id="hdfphotoImgpaths">


                            <div class="upload-preview">
                                <div class="preview_box" id="MemorialImgUpl"></div>
                            </div>
                        </div>
                    </div>
                    <div class="shareEdit_footer">
                        <div class="sharefooter_btn">
                            <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat csReset">Discard</a>
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat csPhoto">Publish</a>
                        </div>
                        <div class="sharefooter_btn">
                            <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat csPostDraft">Save draft</a>

                        </div>
                    </div>
                </div>
                <!-- Timeline -->
                <div class="row">
                    <div class="col s12 m8 push-m4 l8 push-l4">
                        <table id="tblShareMemory">
                            <tbody><tr style="display: none;">
                                <td>
                                    <div class="timelineBox">
                                        <div class="timeBox-feature-img csPostDiv" style="">
                                            <div class="img-number img-one ">
                                                <div class="img-box">
                                                    <img class="blogImg csPostImg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeBox-head">
                                            <div class="profileImg">
                                                <a href="#" class="profileImg-wrap">
                                                    <img class="csProfileImg">
                                                </a>
                                            </div>
                                            <div class="profileTxt">
                                                <p class="profile-head">
                                                    <a class="prsname" href="#">
                                                        <span id="lblUName" class="csName"></span></a>
                                                    <span class="prstatus">
                                                        <span id="lblposttyp" class="csposttype"></span></span>
                                                </p>
                                                <p class="profile-subhead">
                                                    <span class="prstile"><i class="material-icons">access_time</i>
                                                        <span id="lblTimeago" class="csTimeago">0</span></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeBox-body">
                                            <div class="timeBox-content">
                                                <p class="timeBox_content_post_heading">
                                                    <span id="lblPostName" class="csPostName"></span>
                                                </p>
                                                <p>
                                                    <span id="lblPostDesc" class="csPostDesc"></span>
                                                </p>
                                            </div>
                                            <div class="timeBox-actionbar">
                                                <div class="tLikes aLikes csPostlike csLikecss">

                                                    <i class="material-icons clkLike"></i>
                                                    <i class="material-icons clkdisLike" style="display: none;">favorite</i>
                                                    <span id="lblLikeCount" class="csLikeCount"></span>
                                                </div>
                                                <div class="tComments aComments csComment">
                                                    <i class="material-icons"></i>
                                                    <span id="lblCommentCount" class="csCommentCount"></span>
                                                </div>
                                                <div class="csPostId">
                                                    <input type="hidden" name="hdfPostId" id="hdfPostId">
                                                </div>
                                                <div class="csPostTyp">
                                                    <input type="hidden" name="hdfPosTyp" id="hdfPosTyp">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="timeBox-comment" style="display: none;">
                                            <div class="details">
                                                <div class="detail_summary">
                                                    <div class="commentEntry timeline-comment">
                                                        <span class="commentBtn csCommentSend"><i class="material-icons">send</i></span>
                                                        <input type="text" class="csCommet" placeholder="Enter your comment">
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <table id="csCommentrowmain" class="comment-data-table" style="display: none;">
                                                        <tbody><tr class="csCommentrow" style="display: block;">
                                                            <td>
                                                                <li class="list-group-item">
                                                                    <span class="circle">
                                                                        <img id="imgCompic" class="csprofimg_cmnt" alt="" src="" style="width: 50px;">
                                                                    </span>
                                                                    <span class="commentted-middle-section">
                                                                        <a href="#">
                                                                            <span id="lblComnm" class="csName_cmnt"></span>
                                                                        </a><time>
                                                                        <span id="lblComtm" class="csCreated_on_cmnt"></span></time>
                                                                        <p>
                                                                            <span id="lblPostComment" class="csComment_cmnt"></span>
                                                                        </p>
                                                                    </span>
                                                                    <ul class="list-inline actions csShowPanel">
                                                                        <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                        <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                    </ul>
                                                                    <div class="csCmtId">
                                                                        <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid">
                                                                    </div>
                                                                    <div class="csCreated_by_cmnt">
                                                                        <input type="hidden" name="hdfUid" id="hdfUid">
                                                                    </div>
                                                                </li>
                                                            </td>
                                                            </tr>
                                                        </tbody></table>

                                                </ul>
                                            </div>
                                            <ul id="lastComment" class="list-group"></ul>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                                <tr style="display:block;">
                                    <td>
                                        <div class="timelineBox">
                                            <div class="timeBox-feature-img csPostDiv" style="display:none;">
                                                <div class="img-number img-one ">
                                                    <div class="img-box">
                                                        <img class="blogImg csPostImg" src="../UserMemorial">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="timeBox-head">
                                                <div class="profileImg">
                                                    <a href="#" class="profileImg-wrap">
                                                        <img class="csProfileImg" src="../images/no_image.png">
                                                    </a>
                                                </div>
                                                <div class="profileTxt">
                                                    <p class="profile-head">
                                                        <a class="prsname" href="#">
                                                            <span id="lblUName" class="csName">Nishan Pattnaik</span></a>
                                                        <span class="prstatus">
                                                            <span id="lblposttyp" class="csposttype">Shared a post</span></span>
                                                    </p>
                                                    <p class="profile-subhead">
                                                        <span class="prstile"><i class="material-icons">access_time</i>
                                                            <span id="lblTimeago" class="csTimeago">04 Feb 2019</span></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="timeBox-body">
                                                <div class="timeBox-content">
                                                    <p class="timeBox_content_post_heading">
                                                        <span id="lblPostName" class="csPostName">NNNN</span>
                                                    </p>
                                                    <p>
                                                        <span id="lblPostDesc" class="csPostDesc">NNNN</span>
                                                    </p>
                                                </div>
                                                <div class="timeBox-actionbar">
                                                    <div class="tLikes aLikes csPostlike csLikecss">

                                                        <i class="material-icons clkLike"></i>
                                                        <i class="material-icons clkdisLike" style="display: none;">favorite</i>
                                                        <span id="lblLikeCount" class="csLikeCount">0 Likes</span>
                                                    </div>
                                                    <div class="tComments aComments csComment">
                                                        <i class="material-icons"></i>
                                                        <span id="lblCommentCount" class="csCommentCount">0 Comments</span>
                                                    </div>
                                                    <div class="csPostId">
                                                        <input type="hidden" name="hdfPostId" id="hdfPostId" value="1056">
                                                    </div>
                                                    <div class="csPostTyp">
                                                        <input type="hidden" name="hdfPosTyp" id="hdfPosTyp" value="2">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="timeBox-comment" style="display: none;">
                                                <div class="details">
                                                    <div class="detail_summary">
                                                        <div class="commentEntry timeline-comment">
                                                            <span class="commentBtn csCommentSend"><i class="material-icons">send</i></span>
                                                            <input type="text" class="csCommet" placeholder="Enter your comment">
                                                        </div>
                                                    </div>
                                                    <ul class="list-group">
                                                        <table id="csCommentrowmain" class="comment-data-table" style="display: none;">
                                                            <tbody><tr class="csCommentrow" style="display:none;">
                                                                <td>
                                                                    <li class="list-group-item">
                                                                        <span class="circle">
                                                                            <img id="imgCompic" class="csprofimg_cmnt" alt="" src="" style="width: 50px;">
                                                                        </span>
                                                                        <span class="commentted-middle-section">
                                                                            <a href="#">
                                                                                <span id="lblComnm" class="csName_cmnt"></span>
                                                                            </a><time>
                                                                            <span id="lblComtm" class="csCreated_on_cmnt"></span></time>
                                                                            <p>
                                                                                <span id="lblPostComment" class="csComment_cmnt"></span>
                                                                            </p>
                                                                        </span>
                                                                        <ul class="list-inline actions csShowPanel">
                                                                            <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                            <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                        </ul>
                                                                        <div class="csCmtId">
                                                                            <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid">
                                                                        </div>
                                                                        <div class="csCreated_by_cmnt">
                                                                            <input type="hidden" name="hdfUid" id="hdfUid">
                                                                        </div>
                                                                    </li>
                                                                </td>
                                                                </tr>
                                                            </tbody></table>

                                                    </ul>
                                                </div>
                                                <ul id="lastComment" class="list-group"></ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr><tr style="display:block;">
                                <td>
                                    <div class="timelineBox">
                                        <div class="timeBox-feature-img csPostDiv" style="display:none;">
                                            <div class="img-number img-one ">
                                                <div class="img-box">
                                                    <img class="blogImg csPostImg" src="../UserMemorial">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeBox-head">
                                            <div class="profileImg">
                                                <a href="#" class="profileImg-wrap">
                                                    <img class="csProfileImg" src="../images/no_image.png">
                                                </a>
                                            </div>
                                            <div class="profileTxt">
                                                <p class="profile-head">
                                                    <a class="prsname" href="#">
                                                        <span id="lblUName" class="csName">Nishan Pattnaik</span></a>
                                                    <span class="prstatus">
                                                        <span id="lblposttyp" class="csposttype">Shared a post</span></span>
                                                </p>
                                                <p class="profile-subhead">
                                                    <span class="prstile"><i class="material-icons">access_time</i>
                                                        <span id="lblTimeago" class="csTimeago">04 Feb 2019</span></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeBox-body">
                                            <div class="timeBox-content">
                                                <p class="timeBox_content_post_heading">
                                                    <span id="lblPostName" class="csPostName">ss</span>
                                                </p>
                                                <p>
                                                    <span id="lblPostDesc" class="csPostDesc">z</span>
                                                </p>
                                            </div>
                                            <div class="timeBox-actionbar">
                                                <div class="tLikes aLikes csPostlike csLikecss">

                                                    <i class="material-icons clkLike"></i>
                                                    <i class="material-icons clkdisLike" style="display: none;">favorite</i>
                                                    <span id="lblLikeCount" class="csLikeCount">0 Likes</span>
                                                </div>
                                                <div class="tComments aComments csComment">
                                                    <i class="material-icons"></i>
                                                    <span id="lblCommentCount" class="csCommentCount">0 Comments</span>
                                                </div>
                                                <div class="csPostId">
                                                    <input type="hidden" name="hdfPostId" id="hdfPostId" value="1055">
                                                </div>
                                                <div class="csPostTyp">
                                                    <input type="hidden" name="hdfPosTyp" id="hdfPosTyp" value="2">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="timeBox-comment" style="display: none;">
                                            <div class="details">
                                                <div class="detail_summary">
                                                    <div class="commentEntry timeline-comment">
                                                        <span class="commentBtn csCommentSend"><i class="material-icons">send</i></span>
                                                        <input type="text" class="csCommet" placeholder="Enter your comment">
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <table id="csCommentrowmain" class="comment-data-table" style="display: none;">
                                                        <tbody><tr class="csCommentrow" style="display:none;">
                                                            <td>
                                                                <li class="list-group-item">
                                                                    <span class="circle">
                                                                        <img id="imgCompic" class="csprofimg_cmnt" alt="" src="" style="width: 50px;">
                                                                    </span>
                                                                    <span class="commentted-middle-section">
                                                                        <a href="#">
                                                                            <span id="lblComnm" class="csName_cmnt"></span>
                                                                        </a><time>
                                                                        <span id="lblComtm" class="csCreated_on_cmnt"></span></time>
                                                                        <p>
                                                                            <span id="lblPostComment" class="csComment_cmnt"></span>
                                                                        </p>
                                                                    </span>
                                                                    <ul class="list-inline actions csShowPanel">
                                                                        <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                        <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                    </ul>
                                                                    <div class="csCmtId">
                                                                        <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid">
                                                                    </div>
                                                                    <div class="csCreated_by_cmnt">
                                                                        <input type="hidden" name="hdfUid" id="hdfUid">
                                                                    </div>
                                                                </li>
                                                            </td>
                                                            </tr>
                                                        </tbody></table>

                                                </ul>
                                            </div>
                                            <ul id="lastComment" class="list-group"></ul>
                                        </div>
                                    </div>
                                </td>
                                </tr><tr style="display:block;">
                                <td>
                                    <div class="timelineBox">
                                        <div class="timeBox-feature-img csPostDiv" style="display:none;">
                                            <div class="img-number img-one ">
                                                <div class="img-box">
                                                    <img class="blogImg csPostImg" src="../UserMemorial">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeBox-head">
                                            <div class="profileImg">
                                                <a href="#" class="profileImg-wrap">
                                                    <img class="csProfileImg" src="../images/no_image.png">
                                                </a>
                                            </div>
                                            <div class="profileTxt">
                                                <p class="profile-head">
                                                    <a class="prsname" href="#">
                                                        <span id="lblUName" class="csName">Nishan Pattnaik</span></a>
                                                    <span class="prstatus">
                                                        <span id="lblposttyp" class="csposttype">Shared a post</span></span>
                                                </p>
                                                <p class="profile-subhead">
                                                    <span class="prstile"><i class="material-icons">access_time</i>
                                                        <span id="lblTimeago" class="csTimeago">04 Feb 2019</span></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeBox-body">
                                            <div class="timeBox-content">
                                                <p class="timeBox_content_post_heading">
                                                    <span id="lblPostName" class="csPostName">www</span>
                                                </p>
                                                <p>
                                                    <span id="lblPostDesc" class="csPostDesc">wwww</span>
                                                </p>
                                            </div>
                                            <div class="timeBox-actionbar">
                                                <div class="tLikes aLikes csPostlike csLikecss">

                                                    <i class="material-icons clkLike"></i>
                                                    <i class="material-icons clkdisLike" style="display: none;">favorite</i>
                                                    <span id="lblLikeCount" class="csLikeCount">0 Likes</span>
                                                </div>
                                                <div class="tComments aComments csComment">
                                                    <i class="material-icons"></i>
                                                    <span id="lblCommentCount" class="csCommentCount">0 Comments</span>
                                                </div>
                                                <div class="csPostId">
                                                    <input type="hidden" name="hdfPostId" id="hdfPostId" value="1054">
                                                </div>
                                                <div class="csPostTyp">
                                                    <input type="hidden" name="hdfPosTyp" id="hdfPosTyp" value="2">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="timeBox-comment" style="display: none;">
                                            <div class="details">
                                                <div class="detail_summary">
                                                    <div class="commentEntry timeline-comment">
                                                        <span class="commentBtn csCommentSend"><i class="material-icons">send</i></span>
                                                        <input type="text" class="csCommet" placeholder="Enter your comment">
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <table id="csCommentrowmain" class="comment-data-table" style="display: none;">
                                                        <tbody><tr class="csCommentrow" style="display:none;">
                                                            <td>
                                                                <li class="list-group-item">
                                                                    <span class="circle">
                                                                        <img id="imgCompic" class="csprofimg_cmnt" alt="" src="" style="width: 50px;">
                                                                    </span>
                                                                    <span class="commentted-middle-section">
                                                                        <a href="#">
                                                                            <span id="lblComnm" class="csName_cmnt"></span>
                                                                        </a><time>
                                                                        <span id="lblComtm" class="csCreated_on_cmnt"></span></time>
                                                                        <p>
                                                                            <span id="lblPostComment" class="csComment_cmnt"></span>
                                                                        </p>
                                                                    </span>
                                                                    <ul class="list-inline actions csShowPanel">
                                                                        <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                        <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                    </ul>
                                                                    <div class="csCmtId">
                                                                        <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid">
                                                                    </div>
                                                                    <div class="csCreated_by_cmnt">
                                                                        <input type="hidden" name="hdfUid" id="hdfUid">
                                                                    </div>
                                                                </li>
                                                            </td>
                                                            </tr>
                                                        </tbody></table>

                                                </ul>
                                            </div>
                                            <ul id="lastComment" class="list-group"></ul>
                                        </div>
                                    </div>
                                </td>
                                </tr><tr style="display:block;">
                                <td>
                                    <div class="timelineBox">
                                        <div class="timeBox-feature-img csPostDiv" style="display:none;">
                                            <div class="img-number img-one ">
                                                <div class="img-box">
                                                    <img class="blogImg csPostImg" src="../UserMemorial">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeBox-head">
                                            <div class="profileImg">
                                                <a href="#" class="profileImg-wrap">
                                                    <img class="csProfileImg" src="../images/no_image.png">
                                                </a>
                                            </div>
                                            <div class="profileTxt">
                                                <p class="profile-head">
                                                    <a class="prsname" href="#">
                                                        <span id="lblUName" class="csName">Nishan Pattnaik</span></a>
                                                    <span class="prstatus">
                                                        <span id="lblposttyp" class="csposttype">Shared a post</span></span>
                                                </p>
                                                <p class="profile-subhead">
                                                    <span class="prstile"><i class="material-icons">access_time</i>
                                                        <span id="lblTimeago" class="csTimeago">04 Feb 2019</span></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeBox-body">
                                            <div class="timeBox-content">
                                                <p class="timeBox_content_post_heading">
                                                    <span id="lblPostName" class="csPostName">sss</span>
                                                </p>
                                                <p>
                                                    <span id="lblPostDesc" class="csPostDesc">sssss</span>
                                                </p>
                                            </div>
                                            <div class="timeBox-actionbar">
                                                <div class="tLikes aLikes csPostlike csLikecss">

                                                    <i class="material-icons clkLike"></i>
                                                    <i class="material-icons clkdisLike" style="display: none;">favorite</i>
                                                    <span id="lblLikeCount" class="csLikeCount">0 Likes</span>
                                                </div>
                                                <div class="tComments aComments csComment">
                                                    <i class="material-icons"></i>
                                                    <span id="lblCommentCount" class="csCommentCount">0 Comments</span>
                                                </div>
                                                <div class="csPostId">
                                                    <input type="hidden" name="hdfPostId" id="hdfPostId" value="1053">
                                                </div>
                                                <div class="csPostTyp">
                                                    <input type="hidden" name="hdfPosTyp" id="hdfPosTyp" value="2">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="timeBox-comment" style="display: none;">
                                            <div class="details">
                                                <div class="detail_summary">
                                                    <div class="commentEntry timeline-comment">
                                                        <span class="commentBtn csCommentSend"><i class="material-icons">send</i></span>
                                                        <input type="text" class="csCommet" placeholder="Enter your comment">
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <table id="csCommentrowmain" class="comment-data-table" style="display: none;">
                                                        <tbody><tr class="csCommentrow" style="display:none;">
                                                            <td>
                                                                <li class="list-group-item">
                                                                    <span class="circle">
                                                                        <img id="imgCompic" class="csprofimg_cmnt" alt="" src="" style="width: 50px;">
                                                                    </span>
                                                                    <span class="commentted-middle-section">
                                                                        <a href="#">
                                                                            <span id="lblComnm" class="csName_cmnt"></span>
                                                                        </a><time>
                                                                        <span id="lblComtm" class="csCreated_on_cmnt"></span></time>
                                                                        <p>
                                                                            <span id="lblPostComment" class="csComment_cmnt"></span>
                                                                        </p>
                                                                    </span>
                                                                    <ul class="list-inline actions csShowPanel">
                                                                        <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                        <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                    </ul>
                                                                    <div class="csCmtId">
                                                                        <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid">
                                                                    </div>
                                                                    <div class="csCreated_by_cmnt">
                                                                        <input type="hidden" name="hdfUid" id="hdfUid">
                                                                    </div>
                                                                </li>
                                                            </td>
                                                            </tr>
                                                        </tbody></table>

                                                </ul>
                                            </div>
                                            <ul id="lastComment" class="list-group"></ul>
                                        </div>
                                    </div>
                                </td>
                                </tr><tr style="display:block;">
                                <td>
                                    <div class="timelineBox">
                                        <div class="timeBox-feature-img csPostDiv" style="display:none;">
                                            <div class="img-number img-one ">
                                                <div class="img-box">
                                                    <img class="blogImg csPostImg" src="../UserMemorial">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeBox-head">
                                            <div class="profileImg">
                                                <a href="#" class="profileImg-wrap">
                                                    <img class="csProfileImg" src="../images/no_image.png">
                                                </a>
                                            </div>
                                            <div class="profileTxt">
                                                <p class="profile-head">
                                                    <a class="prsname" href="#">
                                                        <span id="lblUName" class="csName">Nishan Pattnaik</span></a>
                                                    <span class="prstatus">
                                                        <span id="lblposttyp" class="csposttype">Shared a post</span></span>
                                                </p>
                                                <p class="profile-subhead">
                                                    <span class="prstile"><i class="material-icons">access_time</i>
                                                        <span id="lblTimeago" class="csTimeago">04 Feb 2019</span></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeBox-body">
                                            <div class="timeBox-content">
                                                <p class="timeBox_content_post_heading">
                                                    <span id="lblPostName" class="csPostName">Public 222</span>
                                                </p>
                                                <p>
                                                    <span id="lblPostDesc" class="csPostDesc">Public222</span>
                                                </p>
                                            </div>
                                            <div class="timeBox-actionbar">
                                                <div class="tLikes aLikes csPostlike csLikecss">

                                                    <i class="material-icons clkLike" style="display:none;"></i>
                                                    <i class="material-icons clkdisLike" style="display:inline-block;">favorite</i>
                                                    <span id="lblLikeCount" class="csLikeCount">1 Likes</span>
                                                </div>
                                                <div class="tComments aComments csComment">
                                                    <i class="material-icons"></i>
                                                    <span id="lblCommentCount" class="csCommentCount">1 Comments</span>
                                                </div>
                                                <div class="csPostId">
                                                    <input type="hidden" name="hdfPostId" id="hdfPostId" value="1052">
                                                </div>
                                                <div class="csPostTyp">
                                                    <input type="hidden" name="hdfPosTyp" id="hdfPosTyp" value="2">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="timeBox-comment" style="display: none;">
                                            <div class="details">
                                                <div class="detail_summary">
                                                    <div class="commentEntry timeline-comment">
                                                        <span class="commentBtn csCommentSend"><i class="material-icons">send</i></span>
                                                        <input type="text" class="csCommet" placeholder="Enter your comment">
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <table id="csCommentrowmain" class="comment-data-table" style="display: none;">
                                                        <tbody><tr class="csCommentrow" style="display:none;">
                                                            <td>
                                                                <li class="list-group-item">
                                                                    <span class="circle">
                                                                        <img id="imgCompic" class="csprofimg_cmnt" alt="" src="" style="width: 50px;">
                                                                    </span>
                                                                    <span class="commentted-middle-section">
                                                                        <a href="#">
                                                                            <span id="lblComnm" class="csName_cmnt"></span>
                                                                        </a><time>
                                                                        <span id="lblComtm" class="csCreated_on_cmnt"></span></time>
                                                                        <p>
                                                                            <span id="lblPostComment" class="csComment_cmnt"></span>
                                                                        </p>
                                                                    </span>
                                                                    <ul class="list-inline actions csShowPanel">
                                                                        <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                        <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                    </ul>
                                                                    <div class="csCmtId">
                                                                        <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid">
                                                                    </div>
                                                                    <div class="csCreated_by_cmnt">
                                                                        <input type="hidden" name="hdfUid" id="hdfUid">
                                                                    </div>
                                                                </li>
                                                            </td>
                                                            </tr>
                                                            <tr class="csCommentrow" style="display: block;">
                                                                <td>
                                                                    <li class="list-group-item">
                                                                        <span class="circle">
                                                                            <img id="imgCompic" class="csprofimg_cmnt" alt="" src="../images/no_image.png" style="width: 50px;">
                                                                        </span>
                                                                        <span class="commentted-middle-section">
                                                                            <a href="#">
                                                                                <span id="lblComnm" class="csName_cmnt">Nishan Pattnaik</span>
                                                                            </a><time>
                                                                            <span id="lblComtm" class="csCreated_on_cmnt">4-Feb-2019 15:13 PM</span></time>
                                                                            <p>
                                                                                <span id="lblPostComment" class="csComment_cmnt">aawerwer</span>
                                                                            </p>
                                                                        </span>
                                                                        <ul class="list-inline actions csShowPanel" style="display:table-cell">
                                                                            <li class="csPCEdit" style="display:inline-block"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                            <li class="csPCRmv" style="display:inline-block"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                        </ul>
                                                                        <div class="csCmtId">
                                                                            <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid" value="16">
                                                                        </div>
                                                                        <div class="csCreated_by_cmnt">
                                                                            <input type="hidden" name="hdfUid" id="hdfUid" value="1057">
                                                                        </div>
                                                                    </li>
                                                                </td>
                                                            </tr></tbody></table>

                                                </ul>
                                            </div>
                                            <ul id="lastComment" class="list-group"></ul>
                                        </div>
                                    </div>
                                </td>
                                </tr><tr style="display:block;">
                                <td>
                                    <div class="timelineBox">
                                        <div class="timeBox-feature-img csPostDiv" style="display:none;">
                                            <div class="img-number img-one ">
                                                <div class="img-box">
                                                    <img class="blogImg csPostImg" src="../UserMemorial">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeBox-head">
                                            <div class="profileImg">
                                                <a href="#" class="profileImg-wrap">
                                                    <img class="csProfileImg" src="../images/no_image.png">
                                                </a>
                                            </div>
                                            <div class="profileTxt">
                                                <p class="profile-head">
                                                    <a class="prsname" href="#">
                                                        <span id="lblUName" class="csName">Nishan Pattnaik</span></a>
                                                    <span class="prstatus">
                                                        <span id="lblposttyp" class="csposttype">Shared a post</span></span>
                                                </p>
                                                <p class="profile-subhead">
                                                    <span class="prstile"><i class="material-icons">access_time</i>
                                                        <span id="lblTimeago" class="csTimeago">04 Feb 2019</span></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeBox-body">
                                            <div class="timeBox-content">
                                                <p class="timeBox_content_post_heading">
                                                    <span id="lblPostName" class="csPostName">Public</span>
                                                </p>
                                                <p>
                                                    <span id="lblPostDesc" class="csPostDesc">Public Message</span>
                                                </p>
                                            </div>
                                            <div class="timeBox-actionbar">
                                                <div class="tLikes aLikes csPostlike csLikecss">

                                                    <i class="material-icons clkLike"></i>
                                                    <i class="material-icons clkdisLike" style="display: none;">favorite</i>
                                                    <span id="lblLikeCount" class="csLikeCount">0 Likes</span>
                                                </div>
                                                <div class="tComments aComments csComment">
                                                    <i class="material-icons"></i>
                                                    <span id="lblCommentCount" class="csCommentCount">0 Comments</span>
                                                </div>
                                                <div class="csPostId">
                                                    <input type="hidden" name="hdfPostId" id="hdfPostId" value="1051">
                                                </div>
                                                <div class="csPostTyp">
                                                    <input type="hidden" name="hdfPosTyp" id="hdfPosTyp" value="2">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="timeBox-comment" style="display: none;">
                                            <div class="details">
                                                <div class="detail_summary">
                                                    <div class="commentEntry timeline-comment">
                                                        <span class="commentBtn csCommentSend"><i class="material-icons">send</i></span>
                                                        <input type="text" class="csCommet" placeholder="Enter your comment">
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <table id="csCommentrowmain" class="comment-data-table" style="display: none;">
                                                        <tbody><tr class="csCommentrow" style="display:none;">
                                                            <td>
                                                                <li class="list-group-item">
                                                                    <span class="circle">
                                                                        <img id="imgCompic" class="csprofimg_cmnt" alt="" src="" style="width: 50px;">
                                                                    </span>
                                                                    <span class="commentted-middle-section">
                                                                        <a href="#">
                                                                            <span id="lblComnm" class="csName_cmnt"></span>
                                                                        </a><time>
                                                                        <span id="lblComtm" class="csCreated_on_cmnt"></span></time>
                                                                        <p>
                                                                            <span id="lblPostComment" class="csComment_cmnt"></span>
                                                                        </p>
                                                                    </span>
                                                                    <ul class="list-inline actions csShowPanel">
                                                                        <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                        <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                    </ul>
                                                                    <div class="csCmtId">
                                                                        <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid">
                                                                    </div>
                                                                    <div class="csCreated_by_cmnt">
                                                                        <input type="hidden" name="hdfUid" id="hdfUid">
                                                                    </div>
                                                                </li>
                                                            </td>
                                                            </tr>
                                                        </tbody></table>

                                                </ul>
                                            </div>
                                            <ul id="lastComment" class="list-group"></ul>
                                        </div>
                                    </div>
                                </td>
                                </tr><tr style="display:block;">
                                <td>
                                    <div class="timelineBox">
                                        <div class="timeBox-feature-img csPostDiv" style="display:none;">
                                            <div class="img-number img-one ">
                                                <div class="img-box">
                                                    <img class="blogImg csPostImg" src="../UserMemorial">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeBox-head">
                                            <div class="profileImg">
                                                <a href="#" class="profileImg-wrap">
                                                    <img class="csProfileImg" src="../images/no_image.png">
                                                </a>
                                            </div>
                                            <div class="profileTxt">
                                                <p class="profile-head">
                                                    <a class="prsname" href="#">
                                                        <span id="lblUName" class="csName">Nishan Pattnaik</span></a>
                                                    <span class="prstatus">
                                                        <span id="lblposttyp" class="csposttype">Shared a post</span></span>
                                                </p>
                                                <p class="profile-subhead">
                                                    <span class="prstile"><i class="material-icons">access_time</i>
                                                        <span id="lblTimeago" class="csTimeago">17 Jan 2019</span></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeBox-body">
                                            <div class="timeBox-content">
                                                <p class="timeBox_content_post_heading">
                                                    <span id="lblPostName" class="csPostName">Write a post by Nishan </span>
                                                </p>
                                                <p>
                                                    <span id="lblPostDesc" class="csPostDesc">Write a post by Nishan</span>
                                                </p>
                                            </div>
                                            <div class="timeBox-actionbar">
                                                <div class="tLikes aLikes csPostlike csLikecss">

                                                    <i class="material-icons clkLike"></i>
                                                    <i class="material-icons clkdisLike" style="display: none;">favorite</i>
                                                    <span id="lblLikeCount" class="csLikeCount">0 Likes</span>
                                                </div>
                                                <div class="tComments aComments csComment">
                                                    <i class="material-icons"></i>
                                                    <span id="lblCommentCount" class="csCommentCount">0 Comments</span>
                                                </div>
                                                <div class="csPostId">
                                                    <input type="hidden" name="hdfPostId" id="hdfPostId" value="1048">
                                                </div>
                                                <div class="csPostTyp">
                                                    <input type="hidden" name="hdfPosTyp" id="hdfPosTyp" value="2">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="timeBox-comment" style="display: none;">
                                            <div class="details">
                                                <div class="detail_summary">
                                                    <div class="commentEntry timeline-comment">
                                                        <span class="commentBtn csCommentSend"><i class="material-icons">send</i></span>
                                                        <input type="text" class="csCommet" placeholder="Enter your comment">
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <table id="csCommentrowmain" class="comment-data-table" style="display: none;">
                                                        <tbody><tr class="csCommentrow" style="display:none;">
                                                            <td>
                                                                <li class="list-group-item">
                                                                    <span class="circle">
                                                                        <img id="imgCompic" class="csprofimg_cmnt" alt="" src="" style="width: 50px;">
                                                                    </span>
                                                                    <span class="commentted-middle-section">
                                                                        <a href="#">
                                                                            <span id="lblComnm" class="csName_cmnt"></span>
                                                                        </a><time>
                                                                        <span id="lblComtm" class="csCreated_on_cmnt"></span></time>
                                                                        <p>
                                                                            <span id="lblPostComment" class="csComment_cmnt"></span>
                                                                        </p>
                                                                    </span>
                                                                    <ul class="list-inline actions csShowPanel">
                                                                        <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                        <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                    </ul>
                                                                    <div class="csCmtId">
                                                                        <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid">
                                                                    </div>
                                                                    <div class="csCreated_by_cmnt">
                                                                        <input type="hidden" name="hdfUid" id="hdfUid">
                                                                    </div>
                                                                </li>
                                                            </td>
                                                            </tr>
                                                        </tbody></table>

                                                </ul>
                                            </div>
                                            <ul id="lastComment" class="list-group"></ul>
                                        </div>
                                    </div>
                                </td>
                                </tr><tr style="display:block;">
                                <td>
                                    <div class="timelineBox">
                                        <div class="timeBox-feature-img csPostDiv" style="display:none;">
                                            <div class="img-number img-one ">
                                                <div class="img-box">
                                                    <img class="blogImg csPostImg" src="../UserMemorial">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeBox-head">
                                            <div class="profileImg">
                                                <a href="#" class="profileImg-wrap">
                                                    <img class="csProfileImg" src="../images/no_image.png">
                                                </a>
                                            </div>
                                            <div class="profileTxt">
                                                <p class="profile-head">
                                                    <a class="prsname" href="#">
                                                        <span id="lblUName" class="csName">Nishan Pattnaik</span></a>
                                                    <span class="prstatus">
                                                        <span id="lblposttyp" class="csposttype">Shared a post</span></span>
                                                </p>
                                                <p class="profile-subhead">
                                                    <span class="prstile"><i class="material-icons">access_time</i>
                                                        <span id="lblTimeago" class="csTimeago">16 Jan 2019</span></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeBox-body">
                                            <div class="timeBox-content">
                                                <p class="timeBox_content_post_heading">
                                                    <span id="lblPostName" class="csPostName">Testing Nishan 16.01 17.02 pm</span>
                                                </p>
                                                <p>
                                                    <span id="lblPostDesc" class="csPostDesc">Testing Nishan 16.01 17.02 pm</span>
                                                </p>
                                            </div>
                                            <div class="timeBox-actionbar">
                                                <div class="tLikes aLikes csPostlike csLikecss">

                                                    <i class="material-icons clkLike"></i>
                                                    <i class="material-icons clkdisLike" style="display: none;">favorite</i>
                                                    <span id="lblLikeCount" class="csLikeCount">0 Likes</span>
                                                </div>
                                                <div class="tComments aComments csComment">
                                                    <i class="material-icons"></i>
                                                    <span id="lblCommentCount" class="csCommentCount">0 Comments</span>
                                                </div>
                                                <div class="csPostId">
                                                    <input type="hidden" name="hdfPostId" id="hdfPostId" value="1047">
                                                </div>
                                                <div class="csPostTyp">
                                                    <input type="hidden" name="hdfPosTyp" id="hdfPosTyp" value="2">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="timeBox-comment" style="display: none;">
                                            <div class="details">
                                                <div class="detail_summary">
                                                    <div class="commentEntry timeline-comment">
                                                        <span class="commentBtn csCommentSend"><i class="material-icons">send</i></span>
                                                        <input type="text" class="csCommet" placeholder="Enter your comment">
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <table id="csCommentrowmain" class="comment-data-table" style="display: none;">
                                                        <tbody><tr class="csCommentrow" style="display:none;">
                                                            <td>
                                                                <li class="list-group-item">
                                                                    <span class="circle">
                                                                        <img id="imgCompic" class="csprofimg_cmnt" alt="" src="" style="width: 50px;">
                                                                    </span>
                                                                    <span class="commentted-middle-section">
                                                                        <a href="#">
                                                                            <span id="lblComnm" class="csName_cmnt"></span>
                                                                        </a><time>
                                                                        <span id="lblComtm" class="csCreated_on_cmnt"></span></time>
                                                                        <p>
                                                                            <span id="lblPostComment" class="csComment_cmnt"></span>
                                                                        </p>
                                                                    </span>
                                                                    <ul class="list-inline actions csShowPanel">
                                                                        <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                        <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                    </ul>
                                                                    <div class="csCmtId">
                                                                        <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid">
                                                                    </div>
                                                                    <div class="csCreated_by_cmnt">
                                                                        <input type="hidden" name="hdfUid" id="hdfUid">
                                                                    </div>
                                                                </li>
                                                            </td>
                                                            </tr>
                                                        </tbody></table>

                                                </ul>
                                            </div>
                                            <ul id="lastComment" class="list-group"></ul>
                                        </div>
                                    </div>
                                </td>
                                </tr><tr style="display:block;">
                                <td>
                                    <div class="timelineBox">
                                        <div class="timeBox-feature-img csPostDiv" style="display:none;">
                                            <div class="img-number img-one ">
                                                <div class="img-box">
                                                    <img class="blogImg csPostImg" src="../UserMemorial">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeBox-head">
                                            <div class="profileImg">
                                                <a href="#" class="profileImg-wrap">
                                                    <img class="csProfileImg" src="../images/no_image.png">
                                                </a>
                                            </div>
                                            <div class="profileTxt">
                                                <p class="profile-head">
                                                    <a class="prsname" href="#">
                                                        <span id="lblUName" class="csName">Mohit Sharma</span></a>
                                                    <span class="prstatus">
                                                        <span id="lblposttyp" class="csposttype">Shared a post</span></span>
                                                </p>
                                                <p class="profile-subhead">
                                                    <span class="prstile"><i class="material-icons">access_time</i>
                                                        <span id="lblTimeago" class="csTimeago">16 Jan 2019</span></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeBox-body">
                                            <div class="timeBox-content">
                                                <p class="timeBox_content_post_heading">
                                                    <span id="lblPostName" class="csPostName">Mohit posts on 16.01.2019</span>
                                                </p>
                                                <p>
                                                    <span id="lblPostDesc" class="csPostDesc">Mohit posts on 16.01.2019</span>
                                                </p>
                                            </div>
                                            <div class="timeBox-actionbar">
                                                <div class="tLikes aLikes csPostlike csLikecss">

                                                    <i class="material-icons clkLike"></i>
                                                    <i class="material-icons clkdisLike" style="display: none;">favorite</i>
                                                    <span id="lblLikeCount" class="csLikeCount">0 Likes</span>
                                                </div>
                                                <div class="tComments aComments csComment">
                                                    <i class="material-icons"></i>
                                                    <span id="lblCommentCount" class="csCommentCount">1 Comments</span>
                                                </div>
                                                <div class="csPostId">
                                                    <input type="hidden" name="hdfPostId" id="hdfPostId" value="1046">
                                                </div>
                                                <div class="csPostTyp">
                                                    <input type="hidden" name="hdfPosTyp" id="hdfPosTyp" value="2">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="timeBox-comment" style="display: none;">
                                            <div class="details">
                                                <div class="detail_summary">
                                                    <div class="commentEntry timeline-comment">
                                                        <span class="commentBtn csCommentSend"><i class="material-icons">send</i></span>
                                                        <input type="text" class="csCommet" placeholder="Enter your comment">
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <table id="csCommentrowmain" class="comment-data-table" style="display: none;">
                                                        <tbody><tr class="csCommentrow" style="display:none;">
                                                            <td>
                                                                <li class="list-group-item">
                                                                    <span class="circle">
                                                                        <img id="imgCompic" class="csprofimg_cmnt" alt="" src="" style="width: 50px;">
                                                                    </span>
                                                                    <span class="commentted-middle-section">
                                                                        <a href="#">
                                                                            <span id="lblComnm" class="csName_cmnt"></span>
                                                                        </a><time>
                                                                        <span id="lblComtm" class="csCreated_on_cmnt"></span></time>
                                                                        <p>
                                                                            <span id="lblPostComment" class="csComment_cmnt"></span>
                                                                        </p>
                                                                    </span>
                                                                    <ul class="list-inline actions csShowPanel">
                                                                        <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                        <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                    </ul>
                                                                    <div class="csCmtId">
                                                                        <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid">
                                                                    </div>
                                                                    <div class="csCreated_by_cmnt">
                                                                        <input type="hidden" name="hdfUid" id="hdfUid">
                                                                    </div>
                                                                </li>
                                                            </td>
                                                            </tr>
                                                            <tr class="csCommentrow" style="display: block;">
                                                                <td>
                                                                    <li class="list-group-item">
                                                                        <span class="circle">
                                                                            <img id="imgCompic" class="csprofimg_cmnt" alt="" src="../images/no_image.png" style="width: 50px;">
                                                                        </span>
                                                                        <span class="commentted-middle-section">
                                                                            <a href="#">
                                                                                <span id="lblComnm" class="csName_cmnt">Mohit Sharma</span>
                                                                            </a><time>
                                                                            <span id="lblComtm" class="csCreated_on_cmnt">16-Jan-2019 15:50 PM</span></time>
                                                                            <p>
                                                                                <span id="lblPostComment" class="csComment_cmnt">Mohit comment</span>
                                                                            </p>
                                                                        </span>
                                                                        <ul class="list-inline actions csShowPanel" style="display:none">
                                                                            <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                            <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                        </ul>
                                                                        <div class="csCmtId">
                                                                            <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid" value="14">
                                                                        </div>
                                                                        <div class="csCreated_by_cmnt">
                                                                            <input type="hidden" name="hdfUid" id="hdfUid" value="1058">
                                                                        </div>
                                                                    </li>
                                                                </td>
                                                            </tr></tbody></table>

                                                </ul>
                                            </div>
                                            <ul id="lastComment" class="list-group"></ul>
                                        </div>
                                    </div>
                                </td>
                                </tr><tr style="display:block;">
                                <td>
                                    <div class="timelineBox">
                                        <div class="timeBox-feature-img csPostDiv" style="display:none;">
                                            <div class="img-number img-one ">
                                                <div class="img-box">
                                                    <img class="blogImg csPostImg" src="../UserMemorial">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeBox-head">
                                            <div class="profileImg">
                                                <a href="#" class="profileImg-wrap">
                                                    <img class="csProfileImg" src="../images/no_image.png">
                                                </a>
                                            </div>
                                            <div class="profileTxt">
                                                <p class="profile-head">
                                                    <a class="prsname" href="#">
                                                        <span id="lblUName" class="csName">Nishan Pattnaik</span></a>
                                                    <span class="prstatus">
                                                        <span id="lblposttyp" class="csposttype">Shared a post</span></span>
                                                </p>
                                                <p class="profile-subhead">
                                                    <span class="prstile"><i class="material-icons">access_time</i>
                                                        <span id="lblTimeago" class="csTimeago">16 Jan 2019</span></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeBox-body">
                                            <div class="timeBox-content">
                                                <p class="timeBox_content_post_heading">
                                                    <span id="lblPostName" class="csPostName">Nishan writing here on 16.01.2019</span>
                                                </p>
                                                <p>
                                                    <span id="lblPostDesc" class="csPostDesc">Nishan writing here on 16.01.2019</span>
                                                </p>
                                            </div>
                                            <div class="timeBox-actionbar">
                                                <div class="tLikes aLikes csPostlike csLikecss">

                                                    <i class="material-icons clkLike"></i>
                                                    <i class="material-icons clkdisLike" style="display: none;">favorite</i>
                                                    <span id="lblLikeCount" class="csLikeCount">0 Likes</span>
                                                </div>
                                                <div class="tComments aComments csComment">
                                                    <i class="material-icons"></i>
                                                    <span id="lblCommentCount" class="csCommentCount">1 Comments</span>
                                                </div>
                                                <div class="csPostId">
                                                    <input type="hidden" name="hdfPostId" id="hdfPostId" value="1045">
                                                </div>
                                                <div class="csPostTyp">
                                                    <input type="hidden" name="hdfPosTyp" id="hdfPosTyp" value="2">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="timeBox-comment" style="display: none;">
                                            <div class="details">
                                                <div class="detail_summary">
                                                    <div class="commentEntry timeline-comment">
                                                        <span class="commentBtn csCommentSend"><i class="material-icons">send</i></span>
                                                        <input type="text" class="csCommet" placeholder="Enter your comment">
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <table id="csCommentrowmain" class="comment-data-table" style="display: none;">
                                                        <tbody><tr class="csCommentrow" style="display:none;">
                                                            <td>
                                                                <li class="list-group-item">
                                                                    <span class="circle">
                                                                        <img id="imgCompic" class="csprofimg_cmnt" alt="" src="" style="width: 50px;">
                                                                    </span>
                                                                    <span class="commentted-middle-section">
                                                                        <a href="#">
                                                                            <span id="lblComnm" class="csName_cmnt"></span>
                                                                        </a><time>
                                                                        <span id="lblComtm" class="csCreated_on_cmnt"></span></time>
                                                                        <p>
                                                                            <span id="lblPostComment" class="csComment_cmnt"></span>
                                                                        </p>
                                                                    </span>
                                                                    <ul class="list-inline actions csShowPanel">
                                                                        <li class="csPCEdit"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                        <li class="csPCRmv"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                    </ul>
                                                                    <div class="csCmtId">
                                                                        <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid">
                                                                    </div>
                                                                    <div class="csCreated_by_cmnt">
                                                                        <input type="hidden" name="hdfUid" id="hdfUid">
                                                                    </div>
                                                                </li>
                                                            </td>
                                                            </tr>
                                                            <tr class="csCommentrow" style="display: block;">
                                                                <td>
                                                                    <li class="list-group-item">
                                                                        <span class="circle">
                                                                            <img id="imgCompic" class="csprofimg_cmnt" alt="" src="../images/no_image.png" style="width: 50px;">
                                                                        </span>
                                                                        <span class="commentted-middle-section">
                                                                            <a href="#">
                                                                                <span id="lblComnm" class="csName_cmnt">Mohit Sharma</span>
                                                                            </a><time>
                                                                            <span id="lblComtm" class="csCreated_on_cmnt">16-Jan-2019 15:49 PM</span></time>
                                                                            <p>
                                                                                <span id="lblPostComment" class="csComment_cmnt">Reply by Mohit</span>
                                                                            </p>
                                                                        </span>
                                                                        <ul class="list-inline actions csShowPanel" style="display:table-cell">
                                                                            <li class="csPCEdit" style="display:none"><a href="javascript:void(0);" class="edit csEditCmt" title="Edit Comment">Edit</a></li>
                                                                            <li class="csPCRmv" style="display:inline-block"><a href="javascript:void(0);" class="edit csRmvCmt" title="Delete Comment">Remove</a></li>
                                                                        </ul>
                                                                        <div class="csCmtId">
                                                                            <input type="hidden" name="hdfPostCmtid" id="hdfPostCmtid" value="13">
                                                                        </div>
                                                                        <div class="csCreated_by_cmnt">
                                                                            <input type="hidden" name="hdfUid" id="hdfUid" value="1058">
                                                                        </div>
                                                                    </li>
                                                                </td>
                                                            </tr></tbody></table>

                                                </ul>
                                            </div>
                                            <ul id="lastComment" class="list-group"></ul>
                                        </div>
                                    </div>
                                </td>
                                </tr></tbody></table>
                        <div class="viewPosts">
                            <a class="csViewMore">view more <i class="fa fa-angle-double-down"></i></a>
                        </div>
                    </div>
                    <div class="col s12 m4 pull-m8 l4 pull-l8">
                        <div class="leftBox">
                            <div class="sideBox">
                                <h4 class="sideTitle">My Memories</h4>
                                <div class="noContent csLeftMemories" style="display:none;">
                                    <p class="msgTxt">You haven't shared memories.</p>
                                </div>
                                <table id="tblleftMemory"><div class="memory_sideBox"><a href="../UserMemorial/memorial-details.aspx?memorial_id=14"><h4>qqq</h4></a><h5>07 Nov 2017-03 Feb 2019</h5><p>qq</p></div></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m3 l3">
                <div class="rightBox">
                    <div class="sideBox">
                        <h4 class="sideTitle">My Recent Posts</h4>
                        <div class="noContent csRecentpost" style="display:none;">
                            <p class="msgTxt">You haven't shared posts.</p>
                        </div>

                        <div class="sidebar_cnt">
                            <h4>NNNN</h4>
                            <p>NNNN</p>
                        </div>

                        <div class="sidebar_cnt">
                            <h4>ss</h4>
                            <p>z</p>
                        </div>

                        <div class="sidebar_cnt">
                            <h4>www</h4>
                            <p>wwww</p>
                        </div>


                    </div>
                    <div class="sideBox">
                        <h4 class="sideTitle">Saved drafts</h4>
                        <div class="noContent csDraft" style="display:block;">
                            <p class="msgTxt">You have no draft to share.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="hdfCmntsts" id="hdfCmntsts" value="0">
        <input type="hidden" name="hdfUserid" id="hdfUserid" value="1057">
        <input type="hidden" name="hdfOffsetTime" id="hdfOffsetTime" value="330">
    </div>
</section>

@endsection

@section('footer')

    <script>
        var publish = 0;
        $(".csPublishAs").click(function () {
            if (!$(this).is(':checked')) {
                publish = 0;
            }
            else {
                publish = 1;
            }
        });
        $(".csPostDraft").click(function () {
            var validation = memorial_post_validation();
            if (validation == false) {
                return;
            }
            var Post_title = $("#txtPostTitle").val();
            var Post_description = $("#txtPostDesc").val();
            //alert("Draft");
            var publishas = publish;
            //alert("publishasDraft" + publishas)
            var Post_status = 1;
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            //alert("pp");
            $.ajax({
                type: "POST",

                url: "{{ route('user.post.add') }}",
                data: JSON.stringify({post_type:'text', _token: CSRF_TOKEN, Post_title_p: Post_title, Post_description_p: Post_description, Publish_as: publishas, Post_status_p: Post_status }),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (response) {
                    $("#txtPostTitle").val("");
                    $("#txtPostDesc").val("");
                    $("#msgshow").attr('style', 'display:block');
                    $("#msgshow").removeClass("alert-box error").addClass("alert-box success");
                    $("#lblmsg").text("Your post has successfully drafted.");
                    window.setTimeout(function () {
                        $('#msgshow').attr('slyle', 'display:none');
                    }, 5000);
                    // window.location = 'timeline.aspx';
                },
                failure: function (response) {
                    alert(response.d);
                }
            });
        });
        $(".csReset").click(function () {
            document.getElementById("imgUpdates").value = "";
            $("[id$=MemorialImgUpl] img").remove();
            $('#form1')[0].reset();
            $(".shareEdit_Box").removeClass("current");
        });
        $(".csTimelinePost").click(function () {
            //alert("inside Timeline");
            var validation = memorial_post_validation();
            if (validation == false) {
                return;
            } else {
                $("#post").removeClass("current");
            }

            var Post_title = $("#txtPostTitle").val();
            var Post_description = $("#txtPostDesc").val();
            var publishas = publish;
            var Post_status = 0;
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: "{{ route('user.post.add') }}",
                data: JSON.stringify({post_type:'text', _token: CSRF_TOKEN, Post_title_p: Post_title, Post_description_p: Post_description, Publish_as: publishas, Post_status_p: Post_status }),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (response) {
                    var response = JSON.stringify(response);
                    toastr.success(response);
                    console.log("Text Data", data);
                },
                failure: function (response) {
                    alert(response.d);
                    console.log("Text Data", data);
                }
            });
        });
        function memorial_post_validation() {
            //alert("inside post function");
            var Post_title = $("#txtPostTitle").val();
            var Post_description = $("#txtPostDesc").val();
            if (Post_title == "") {
                $("#txtPostTitle").focus();
                return false;
            }
            if (Post_description == "") {
                $("#txtPostDesc").focus();
                return false;
            }
        }
        $("#fuimgUpdates").change(function () {
            if (typeof (FileReader) != "undefined") {
                var dvPreview = $("#divImgUpl");
                $($(this)[0].files).each(function () {
                    var file = $(this);
                    var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
                    if ($.inArray(file[0].name.split('.').pop().toLowerCase(), fileExtension) == -1) {
                        //alert("This is not a valid image file.");
                        return false;
                    }
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        //img.attr("style", "width: 50px;height: 35px;float: left; margin-left:5px;");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                        if (document.getElementById("hdfImgpath").value == "") {
                            document.getElementById("hdfImgpath").value = e.target.result;
                        }
                        else {
                            document.getElementById("hdfImgpath").value = document.getElementById("hdfImgpath").value + "$$" + e.target.result;
                        }
                    }
                    reader.readAsDataURL(file[0]);
                });
                //$("#addImgUpl").attr('style', 'display:block');
            } else {
                //alert("This browser does not support HTML5 FileReader.");
            }
        });
        $(".csSubmit").click(function () {
            $("#album").removeClass("current");
            var validation = album_validation();
            if (validation == false) {
                return;
            }

            var title = document.getElementById("txtAlbumTitle").value;
            var img_path = document.getElementById("hdfImgpath").value;
            var desc = document.getElementById("txtDescription").value;
            var album_typ = "1";
            $("[id$=divImgUpl] img").remove();
            //$("#addImgUpl").attr('style', 'display:none');
            console.log(img_path);
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                type: "POST",
                url: "{{ route('user.post.add') }}",
                data: JSON.stringify({  _token: CSRF_TOKEN, post_type: 'album',title_p: title, imgPath_p: img_path, desc_p: desc, album_typ_p: album_typ }),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (response) {
                   alert(response);
                    console.log("Image Data", data);
                },
                failure: function (response) {
                    alert(response);
                    console.log("Album Data", data);
                }
            });
        });
        function album_validation() {
            var title = $("#txtAlbumTitle").val().trim();
            var desc = $("#txtDescription").val().trim();
            var imgpath = $("#hdfImgpath").val().trim();
            if (title == "") {
                $("#txtAlbumTitle").focus();
                return false;
            }
            if (desc == "") {
                $("#txtDescription").focus();
                return false;
            }
            if (imgpath == "") {
                $("#fuimgUpdates").focus();
                return false;
            }
        }
        $("#imgUpdates").change(function () {
            if (typeof (FileReader) != "undefined") {
                var dvPreview = $("#MemorialImgUpl");
                $($(this)[0].files).each(function () {
                    var file = $(this);
                    var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
                    if ($.inArray(file[0].name.split('.').pop().toLowerCase(), fileExtension) == -1) {
                        //alert("This is not a valid image file.");
                        return false;
                    }
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        //img.attr("style", "width: 50px;height: 35px;float: left; margin-left:5px;");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                        if (document.getElementById("hdfphotoImgpaths").value == "") {
                            document.getElementById("hdfphotoImgpaths").value = e.target.result;
                        }
                        else {
                            document.getElementById("hdfphotoImgpaths").value = document.getElementById("hdfphotoImgpaths").value + "$$" + e.target.result;
                        }
                    }
                    reader.readAsDataURL(file[0]);
                });
                //$("#MemorialImgUpl").attr('style', 'display:block');
            } else {
                //alert("This browser does not support HTML5 FileReader.");
            }
        });
        function photo_validation() {
            // var Memorials = $("#ddlMemorial").val().trim();
            //alert("Memorials" + Memorials)
            var photoImgpaths = $("#hdfphotoImgpaths").val().trim();
            //alert("photoImgpaths" + photoImgpaths)
            // if (Memorials == "") {
            //     return false;
            // }
            if (photoImgpaths == "") {
                return false;
            }
        }

        $(".csPhoto").click(function () {
            //alert("Upload Photo")
            var validation = photo_validation();
            //alert("validatePhoto" + validation)
            if (validation == false) {
                return;
                //alert("A")
            }
            else {
                //alert("B")
                $("#photo").removeClass("current");
                //alert("C")
            }
            // var Memorial_id = document.getElementById("ddlMemorial").value;
            //alert("Memorial_id Upload" + Memorial_id)
            var image_paths = document.getElementById("hdfphotoImgpaths").value;
            //alert("image_paths" + image_paths)
            $("[id$=MemorialImgUpl] img").remove();
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: "POST",
                url: "{{ route('user.post.add') }}",
                data: JSON.stringify({_token: CSRF_TOKEN, post_type: 'image', image_paths_p: image_paths }),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (response) {
                    $("#ddlMemorial").val("");
                    console.log("Image Data", data);
                },
                failure: function (response) {
                    //alert(response.d);
                    console.log("Image Data", data);
                }
            });
        });
        function memorial_photo_validation() {
            var Memorial_title = $("#Memorialtitle").val();
            var image_paths = $("hdfphotoImgpaths").val();
            if (Memorial_title == "") {
                $("#Memorialtitle").focus();
                return false;
            }
            if (Photo == "") {
                $("#ImgUpl").focus();
                return false;
            }
        }
        $(".csPostlike").click(function () {
            var _postid = $(this).closest("tr").find('.csPostId input[type=hidden]').val();
            var _posttype = $(this).closest("tr").find('.csPostTyp input[type=hidden]').val();
            var spanlikecount = $(this).closest("tr").find('.csLikeCount');
            var spanlike = $(this).closest("tr").find('.csLikecss');
            var hideLike = $(this).closest("tr").find('.clkLike');
            var showLike = $(this).closest("tr").find('.clkdisLike');
            $.ajax({
                type: "POST",
                url: "timeline.aspx/insLike",
                data: JSON.stringify({ postid: _postid, posttype: _posttype }),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (response) {
                    OnLikeSuccess(response, spanlike, spanlikecount, hideLike, showLike);
                },
                failure: function (response) {
                    alert(response.d);
                }
            });
        });
        function OnLikeSuccess(response, spanlike, spanlikecount, hideLike, showLike) {
            var likeStatus = response.d.split(',');
            spanlikecount.html(likeStatus[1]);
            if (likeStatus[0] == "1") {
                hideLike.hide();
                showLike.show();
            }
            else {
                hideLike.show();
                showLike.hide();
            }
        }
        $(".csCommentSend").click(function () {
            //alert("CA")
            var currentrow = $(this).closest("tr");
            var commmnnnn = $(this).closest(".timelineBox");
            commentclick(currentrow, commmnnnn);

        });
        function commentclick(currentrow, commmnnnn) {
            //alert("CB")
            var _postid = currentrow.find('.csPostId input[type=hidden]').val();
            var _posttype = currentrow.find('.csPostTyp input[type=hidden]').val();
            var _comment = currentrow.find('.csCommet').val();
            var comntcount = currentrow.find('.csCommentCount').html().replace('Comments', '');
            currentrow.find('.csCommet').val('');
            if (_comment == "") {
                currentrow.find('.csCommet').focus();
                return;
            }
            if (document.getElementById("hdfCmntsts").value == "0") {//insert comment
                $.ajax({
                    type: "POST",
                    url: "timeline.aspx/insComment",
                    data: JSON.stringify({ postid: _postid, posttype: _posttype, comment: _comment }),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        OnCommentSuccess(response, comntcount, commmnnnn);
                        // window.location = 'timeline.aspx';
                    },
                    failure: function (response) {
                        alert(response.d);
                    }
                });
            }
            else if (document.getElementById("hdfCmntsts").value == "1") {

                $.ajax({
                    type: "POST",
                    url: "timeline.aspx/updComment",
                    data: JSON.stringify({ commentid: editcomntrowid, comment: _comment, createdby: editcomntcreatedby }),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        OnCommentUpdate(response, currentrow, _comment);
                    },
                    failure: function (response) {
                        alert(response.d);
                    }
                });
                document.getElementById("hdfCmntsts").value = "0";
            }
        }
        function OnCommentUpdate(response, currentrow, _comment) {
            //alert("CC")
            var output = (response.d).split(',');
            var aaa = output[1];
            // alert(output);
            if (output[0] == "2") {
                editcomntrownm.html(_comment);
                //editcomntcreatedon.html(localTime(output[1]));
            }
        }
        function OnCommentSuccess(response, comntcount, commmnnnn) {
            //alert("CD")
            var output = (response.d);
            var xmlDoc = $.parseXML(response.d);
            var xml = $(xmlDoc);
            //alert("xmlvalue" + xml)
            var rvw_comnt = xml.find("Table");
            var row = $("[id$=csCommentrowmain] tr:last").eq(0).clone(true);
            //alert("rowcomment" + row)
            rvw_comnt.each(function () {
                row.attr("style", "display:block;");
                $(".csprofimg_cmnt", row).attr('src', rvw_comnt.find("profimg_cmnt").text());
                var date_comnt = rvw_comnt.find("Created_on_cmnt").text().replace('T', ' ');//'T' is coming by default from database
                $(".csName_cmnt", row).html(rvw_comnt.find("Name_cmnt").text());
                var cmtText;
                //alert("cmtText" + cmtText)
                cmtText = rvw_comnt.find("Comment").text().replace(/((https?\:\/\/)|(www\.))(\S+)(\w{2,4})(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/gi, function (url) {
                    var full_url = url;
                    if (!full_url.match('^https?:\/\/')) {
                        full_url = 'http://' + full_url;
                    }
                    return '<a href="' + full_url + '" target="_blank">' + url + '</a>';
                });

                $(".csComment_cmnt", row).html(cmtText);
                $(".csCreated_on_cmnt", row).html(localTime(rvw_comnt.find("Created_on_cmnt").text()));
                $(".csCreated_by_cmnt", row).find("input[type=hidden]").attr('value', rvw_comnt.find("Created_by_cmnt").text());
                $(".csCmtId", row).find("input[type=hidden]").attr('value', rvw_comnt.find("Review_post_id").text());
                commmnnnn.find('.csCommentCount').html(Number(comntcount) + 1 + " Comments");//total comment count

                var sesUid = document.getElementById("hdfUserid").value;
                var comntUid = $(".csCreated_by_cmnt", row).find("input[type=hidden]").val();
                if (sesUid == comntUid) {
                    $(".csShowPanel", row).attr('style', 'display:table-cell');
                    //$(".csEditCmt", row).attr('style', 'display:block');
                    //$(".csRmvCmt", row).attr('style', 'display:block');
                }
                else {
                    $(".csShowPanel", row).attr('style', 'display:none');
                    //$(".csEditCmt", row).attr('style', 'display:none');
                    //$(".csRmvCmt", row).attr('style', 'display:none');
                }
                $(".timeBox-comment", row).attr('style', 'display:block');
                $("[id$=csCommentrowmain]").append(row);


            });
        }
        var editcomntrownm;
        var editcomntrowid;//used to store the selected comment
        var editcomntcreatedby;
        var editcomntcreatedon;
        $('.csEditCmt').click(function () {
            editcomntrowid = $(this).closest(".csCommentrow").find('.csCmtId input[type=hidden]').val();
            editcomntcreatedby = $(this).closest(".csCommentrow").find('.csCreated_by_cmnt input[type=hidden]').val();
            editcomntrownm = $(this).closest(".csCommentrow").find('.csComment_cmnt');
            editcomntcreatedon = $(this).closest(".csCommentrow").find('.csCreated_on_cmnt');
            var comment = $(this).closest(".csCommentrow").find('.csComment_cmnt').html();
            $(this).closest(".timelineBox").find(".csCommet").val(comment);
            $(this).closest(".timelineBox").find(".csCommet").focus();
            document.getElementById("hdfCmntsts").value = "1";
        });
        $('.csRmvCmt').click(function () {
            var currentrow = $(this).closest(".csCommentrow");
            var currentparentrow = $(this).closest(".csTimelineMnRow");
            var _commentid = $(this).closest(".csCommentrow").find('.csCmtId input[type=hidden]').val();
            var _comntcreatedby = $(this).closest(".csCommentrow").find('.csCreated_by_cmnt input[type=hidden]').val();
            var comntcount = $(this).closest(".timelineBox").find('.csCommentCount').html().replace('Comments', '');
            var commmnnnn = $(this).closest(".timelineBox");
            $.ajax({
                type: "POST",
                url: "timeline.aspx/removeComment",
                data: JSON.stringify({ commentid: _commentid, createdby: _comntcreatedby }),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (response) {
                    OnCmtRemove(response, currentrow, currentparentrow, comntcount, commmnnnn);

                },
                failure: function (response) {
                    alert(response.d);
                }
            });
        });
        function OnCmtRemove(response, currentrow, currentparentrow, comntcount, commmnnnn) {
            alert(response.d);
            var cmtStatus = response.d;
            if (cmtStatus == "3") {
                currentrow.remove();
                commmnnnn.find('.csCommentCount').html(comntcount - 1 + " Comments");//total comment count
            }
        }

        $('.csViewMore').click(function () {
            pageIndex++;
            getTimeline();
        });
    </script>
    <script type="text/javascript">
        var pageIndex = 1;
        var pageCount;
        $(document).ready(function () {
            var dt = new Date()
            var utcdiff = dt.getTimezoneOffset();//get the difference from utc time
            var tt = utcdiff.toString().replace('-', '');
            $("#hdfOffsetTime").val(tt);
            getTimeline();
            $('.share-btn').click(function () {
                var tab_id = $(this).attr('data-tab');
                $('.share-btn').removeClass('current');
                $('.shareEdit_Box').removeClass('current');
                $(this).addClass('current');
                $("#" + tab_id).addClass('current');
            })
        });
        function getTimeline() {
            if (pageIndex == 1 || pageIndex <= pageCount) {
                //Show Loader
                if ($("[id$=tblShareMemory] .timelineloader").length == 0) {
                    var row = $("[id$=tblShareMemory] tr").eq(0).clone(true);
                    row.addClass("timelineloader");
                    row.attr('style', 'display:block;');
                    row.children().remove();
                    row.append('<td style= "text-align:center;width: 1%;"><img src="../images/loader-timeline.gif" /></td>');
                    $("[id$=tblShareMemory]").append(row);
                }
                $.ajax({
                    type: "POST",
                    url: "timeline.aspx/retmytimeline",
                    data: JSON.stringify({ pageIndex_p: pageIndex }),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        var xmlDoc = $.parseXML(response.d);
                        var xml = $(xmlDoc);
                        var MyShareMemory = xml.find("Table");
                        var MyLeftMemory = xml.find("Table2");
                        var recentpost = "";
                        pageCount = parseInt(xml.find("Table1").eq(0).find("PageCount").text());
                        BindTimelineDetails(MyShareMemory, MyLeftMemory);
                        var recentpost = "";
                        recentpost = '1';
                        //alert("recentpostval" + recentpost)
                        if (recentpost == 1) {
                            $(".csRecentpost").attr('style', 'display:none;');
                        }
                        else {
                            $(".csRecentpost").attr('style', 'display:block;');
                        }
                        var nodraft = "";
                        nodraft = '1';
                        //alert("nodraftvalue" + nodraft)
                        if (nodraft == 1) {
                            $(".csDraft").attr('style', 'display:none;');
                        }
                        else {
                            $(".csDraft").attr('style', 'display:block;');
                        }
                    },
                    failure: function (response) {
                        //alert("fail");
                    },
                    error: function (response) {
                        // alert("error");
                    }
                });
            }
        }
        function BindTimelineDetails(MyShareMemory, MyLeftMemory) {
            //alert("inside BindTimelineDetails")
            var MyShareMemorial = '';
            var MyMemories = '';
            var itemCounter = 1;
            var nCol = 2;
            MyShareMemory.each(function () {
                var timeline = $(this);
                var row = $("[id$=tblShareMemory] tr").eq(0).clone(true);
                row.attr("style", "display:block;");
                var Post_CreatedBy = timeline.find("Created_by").text();
                $(".csPostImg", row).attr('src', "../UserMemorial" + timeline.find("Shareimg").text());
                if (timeline.find("styleshareimg").text() != "") {
                    $(".csPostDiv", row).attr('style', timeline.find("styleshareimg").text());
                }
                else {
                    $(".csPostDiv", row).attr('style', "display:none;");
                }
                $(".csposttype", row).html(timeline.find("commentyp").text());
                $(".csLikeCount", row).html(timeline.find("Postlike").text());
                $(".csCommentCount", row).html(timeline.find("Postcomment").text());
                $(".csProfileImg", row).attr('src', timeline.find("Profile_image").text());

                $(".csName", row).html(timeline.find("Name").text());
                $(".csPostName", row).html(timeline.find("PNAME").text());

                $(".csPostDesc", row).html(timeline.find("PDESC").text());

                $(".csPostId", row).find("input[type=hidden]").attr('value', timeline.find("PID").text());
                $(".csPostTyp", row).find("input[type=hidden]").attr('value', timeline.find("PTYPE").text());
                $(".csTimeago", row).html(timeline.find("Created_on").text());
                if (timeline.find("Likecss").text() == 'display:inline-block;') {
                    $(".clkLike", row).attr('style', "display:none;");
                    $(".clkdisLike", row).attr('style', "display:inline-block;");
                }
                var timeline_comnts = timeline.find("Table3");
                var comntrowcount = 0;
                $(timeline_comnts).each(function (index) {
                    comntrowcount++;
                    var commentrow = $("[id$=csCommentrowmain] tr", row).eq(0).clone(true);
                    var ztimeline_comnt = $(this);
                    comntbind(commentrow, ztimeline_comnt, Post_CreatedBy);
                    $("[id$=csCommentrowmain]", row).append(commentrow);
                });
                $("[id$=csCommentrowmain] tr:first", row).attr('style', 'display:none;');//display not to first row
                //comment end
                $("[id$=tblShareMemory]").append(row);
            });
            $(".timelineloader").remove();
            $(".csLeftMemories").attr('style', "display:block;");
            $(MyLeftMemory).each(function (index) {
                var rowdata = $(this);
                $(".csLeftMemories").attr('style', "display:none;");
                $("#ddlMemorial").append($("<option></option>").val(rowdata.find("Memorial_id").text()).html(rowdata.find("Memorial_name").text()));
                if ((itemCounter % nCol) == 0) {
                    MyMemories = MyMemories +
                        '<div class="memory_sideBox">'
                        + '<a href="../UserMemorial/memorial-details.aspx?memorial_id=' + rowdata.find("Memorial_id").text() + '">' + '<h4>' + rowdata.find("Memorial_name").text() + '</h4>' + '</a>'
                        + '<h5>' + rowdata.find("PostDate").text() + '</h5>'
                        + '<p>' + rowdata.find("Content").text() + '</p>' + '</div>'
                    ;
                }
                else {
                    MyMemories = MyMemories +
                        '<div class="memory_sideBox">'
                        + '<a href="../UserMemorial/memorial-details.aspx?memorial_id=' + rowdata.find("Memorial_id").text() + '">' + '<h4>' + rowdata.find("Memorial_name").text() + '</h4>' + '</a>'
                        + '<h5>' + rowdata.find("PostDate").text() + '</h5>'
                        + '<p>' + rowdata.find("Content").text() + '</p>'
                        + '</div>'
                    ;
                }
                itemCounter++;
            });
            MyMemories = MyMemories;
            $('#tblleftMemory').html(MyMemories);
        }
        function comntbind(commentrow, ztimeline_comnt, Post_CreatedBy) {
            $(".csprofimg_cmnt", commentrow).attr('src', ztimeline_comnt.find("profimg_cmnt").text());
            var date_comnt = ztimeline_comnt.find("Created_on_cmnt").text().replace('T', ' ');//'T' is coming by default from database
            $(".csName_cmnt", commentrow).html(ztimeline_comnt.find("Name_cmnt").text());
            var cmtText;
            cmtText = ztimeline_comnt.find("Comment").text().replace(/((https?\:\/\/)|(www\.))(\S+)(\w{2,4})(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/gi, function (url) {
                var full_url = url;
                if (!full_url.match('^https?:\/\/')) {
                    full_url = 'http://' + full_url;
                }
                return '<a href="' + full_url + '" target="_blank">' + url + '</a>';
            });
            $(".csComment_cmnt", commentrow).html(cmtText);
            $(".csCreated_on_cmnt", commentrow).html(localTime(ztimeline_comnt.find("Created_on_cmnt").text()));
            $(".csCreated_by_cmnt", commentrow).find("input[type=hidden]").attr('value', ztimeline_comnt.find("Created_by_cmnt").text());
            $(".csCmtId", commentrow).find("input[type=hidden]").attr('value', ztimeline_comnt.find("Review_post_id").text());

            var sesUid = document.getElementById("hdfUserid").value;
            var comntUid = $(".csCreated_by_cmnt", commentrow).find("input[type=hidden]").val();
            if (sesUid == comntUid) {
                $(".csShowPanel", commentrow).attr('style', 'display:table-cell');
            }
            else {
                $(".csShowPanel", commentrow).attr('style', 'display:none');
            }
            if (Post_CreatedBy == sesUid) {
                $(".csShowPanel", commentrow).attr('style', 'display:table-cell');
                $(".csPCEdit", commentrow).attr('style', 'display:none');
                $(".csPCRmv", commentrow).attr('style', 'display:inline-block');
                if (sesUid == comntUid) {
                    $(".csPCEdit", commentrow).attr('style', 'display:inline-block');
                }
            }
        }
        function detectBrowser() {
            var N = navigator.appName;
            var UA = navigator.userAgent;
            var temp;
            var browserVersion = UA.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
            //if (browserVersion && (temp = UA.match(/version\/([\.\d]+)/i)) != null)//for finding the version
            //    browserVersion[2] = temp[1];
            //browserVersion = browserVersion ? [browserVersion[1], browserVersion[2]] : [N, navigator.appVersion, '-?'];
            browserVersion = browserVersion ? [browserVersion[1]] : [N, navigator.appVersion, '-?'];
            return browserVersion;
        };


        //local time conversion start
        function localTime(dbDate1) {
            //alert(dbDate1);
            //
            var dbDate;
            var browser = detectBrowser().toString().split(',');

            if (browser[0] == "Firefox") {
                dbDate = dbDate1;
            }
            else if (browser[0] == "Chrome") {
                dbDate = dbDate1.replace('T', ' ');
            }
            else if (browser[0] == "Netscape") {
                dbDate = dbDate1;
            }
            else if (browser[0] == "Safari") {
                var dt = dbDate1.split(/[-T.]/);
                dbDate = dt.slice(0, 3).join('/') + ' ' + dt[3];
            }
            else {
                dbDate = dbDate1.replace('T', ' ');
            }
            var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            var d = new Date()
            var n = d.getTimezoneOffset();//get the difference from utc time
            var min;
            if (n.toString().charAt(0) == "+") {
                min = parseInt(n.toString().replace('+', '-'));
            }
            else if (n.toString().charAt(0) == "-") {
                min = parseInt(n.toString().replace('-', ''));
            }
            else {
                min = parseInt("-" + n.toString());
            }
            var date = new Date(Date.parse(dbDate));
            date.setMinutes(date.getMinutes() + min);
            var ampm = (date.getHours() >= 12) ? "PM" : "AM";
            var localdate = date.getDate() + "-" + months[date.getMonth()] + "-" + date.getFullYear() + " " + date.getHours() + ":" + (date.getMinutes() < 10 ? '0' : '') + date.getMinutes() + " " + ampm;
            return localdate;

        }
        //conversion end
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            //alert("Open");
            //alert("inside timeBox-comment")
            //$(".button-collapse").sideNav(); // Mobile Navigation
            //$('.modal').modal(); // Modal Popup
            //$('select').material_select();
            $('.timeBox-comment').hide();
            var click = 0;
            $('.aComments').click(function () {
                //$(this).closest(".timelineBox").find(".csCommentrowmain").toggle();

                $(this).closest("tr").find('.timeBox-comment').toggle();
                if (click != 1) {
                    //alert("Click A")
                    $(this).closest("tr").find('.timeBox-comment table').attr('style', 'display:block;');
                    click = 1;
                }
                else {
                    //alert("Click B")
                    $(this).closest("tr").find('.timeBox-comment table').attr('style', 'display:none;');
                    click = 0;
                }
                //$('.timeBox-comment').toggle();
            });
        });
    </script>

@endsection
