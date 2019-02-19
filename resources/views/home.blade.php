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
    <p>Hello I'm footer</p>
@endsection