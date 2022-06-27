<?php
include("../../manager/includes/database.php");
include("../../manager/includes/functions.php");
include("../../manager/includes/common.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style/editor.css" rel="stylesheet" type="text/css">
<script>
  var sLangDir=parent.oUtil.langDir;
  document.write("<scr"+"ipt src='language/"+sLangDir+"/hyperlink.js'></scr"+"ipt>");
</script>
<script>writeTitle()</script>
<script>

function GetElement(oElement,sMatchTag)
  {
  while (oElement!=null&&oElement.tagName!=sMatchTag)
    {
    if(oElement.tagName=="BODY")return null;
    oElement=oElement.parentElement;
    }
  return oElement;
  }

function doWindowFocus()
  {
  parent.oUtil.onSelectionChanged=new Function("realTime()");
  }

function bodyOnLoad()
  {
  loadTxt();

  window.onfocus=doWindowFocus;
  parent.oUtil.onSelectionChanged=new Function("realTime()");

  if(parent.oUtil.obj.cmdAssetManager!="")btnAsset.style.display="block";
  if(parent.oUtil.obj.cmdFileManager!="")btnAsset.style.display="block";

  realTime();

  }

function bodyOnUnload() {
  parent.oUtil.onSelectionChanged=null;
}

function openAsset()
  {
  if(parent.oUtil.obj.cmdAssetManager!="")
    eval(parent.oUtil.obj.cmdAssetManager);
  if(parent.oUtil.obj.cmdFileManager!="")
    eval(parent.oUtil.obj.cmdFileManager);
  }
function setAssetValue(v)
  {
  document.getElementById("inpURL").value = v;
  }

function modalDialogShow(url,width,height) {
  parent.modalDialogShow(url,width,height, window);
}

function updateList()
  {
  var oEditor=parent.oUtil.oEditor;

  while(inpBookmark.options.length!=0)
    {
    inpBookmark.options.remove(inpBookmark.options(0))
    }
  for(var i=0;i<oEditor.document.anchors.length;i++)
    {
    var op = document.createElement("OPTION");
    op.text=oEditor.document.anchors[i].name;
    op.value="#"+oEditor.document.anchors[i].name;
    inpBookmark.options.add(op);
    }
  }
function realTime()
  {
  if(!parent.oUtil.obj.checkFocus()){return;}//Focus stuff
  var oEditor=parent.oUtil.oEditor;
  var oSel=oEditor.document.selection.createRange();
  var sType=oEditor.document.selection.type;

  updateList();

  //If text or control is selected, Get A element if any
  if (oSel.parentElement) oEl=GetElement(oSel.parentElement(),"A");
  else oEl=GetElement(oSel.item(0),"A");

  //Is there an A element ?
  if (oEl)
    {
    btnInsert.style.display="none";
    btnApply.style.display="block";
    btnOk.style.display="block";


    //~~~~~~~~~~~~~~~~~~~~~~~~
    sTmp=oEl.outerHTML;
    if(sTmp.indexOf("href")!=-1) //1.5.1
      {
      sTmp=sTmp.substring(sTmp.indexOf("href")+6);
      sTmp=sTmp.substring(0,sTmp.indexOf('"'));
      var arrTmp = sTmp.split("&amp;");
      if (arrTmp.length > 1) sTmp = arrTmp.join("&");
      sURL=sTmp
      //sURL=oEl.href;
      }
    else
      {
      sURL=""
      }

    if(sType!="Control")
      {
      try
        {
        var oSelRange = oEditor.document.body.createTextRange()
        oSelRange.moveToElementText(oEl)
        oSel.setEndPoint("StartToStart",oSelRange);
        oSel.setEndPoint("EndToEnd",oSelRange);
        oSel.select();
        }
      catch(e){return;}
      }

    inpTarget.value="";
    inpTargetCustom.value="";
    if(oEl.target=="_self" || oEl.target=="_blank" || oEl.target=="_parent")
      inpTarget.value=oEl.target;//inpTarget
    else
      inpTargetCustom.value=oEl.target;

    inpTitle.value="";
    if(oEl.title!=null) inpTitle.value=oEl.title;//inpTitle //1.5.1


    if(sURL.substr(0,7)=="http://")
      {
      inpType.value="http://";//inpType
      inpURL.value=sURL.substr(7);//idLinkURL

      inpBookmark.disabled=true;
      inpURL.disabled=false;
      inpType.disabled=false;
      rdoLinkTo[0].checked=true;
      rdoLinkTo[1].checked=false;
      }
    else if(sURL.substr(0,8)=="https://")
      {
      inpType.value="https://";
      inpURL.value=sURL.substr(8);

      inpBookmark.disabled=true;
      inpURL.disabled=false;
      inpType.disabled=false;
      rdoLinkTo[0].checked=true;
      rdoLinkTo[1].checked=false;
      }
    else if(sURL.substr(0,7)=="mailto:")
      {
      inpType.value="mailto:";
      inpURL.value=sURL.split(":")[1];

      inpBookmark.disabled=true;
      inpURL.disabled=false;
      inpType.disabled=false;
      rdoLinkTo[0].checked=true;
      rdoLinkTo[1].checked=false;
      }
    else if(sURL.substr(0,6)=="ftp://")
      {
      inpType.value="ftp://";
      inpURL.value=sURL.substr(6);

      inpBookmark.disabled=true;
      inpURL.disabled=false;
      inpType.disabled=false;
      rdoLinkTo[0].checked=true;
      rdoLinkTo[1].checked=false;
      }
    else if(sURL.substr(0,5)=="news:")
      {
      inpType.value="news:";
      inpURL.value=sURL.split(":")[1];

      inpBookmark.disabled=true;
      inpURL.disabled=false;
      inpType.disabled=false;
      rdoLinkTo[0].checked=true;
      rdoLinkTo[1].checked=false;
      }
    else if(sURL.substr(0,11).toLowerCase()=="javascript:")
      {
      inpType.value="javascript:";
      //inpURL.value=sURL.split(":")[1];
      inpURL.value=sURL.substr(sURL.indexOf(":")+1);

      inpBookmark.disabled=true;
      inpURL.disabled=false;
      inpType.disabled=false;
      rdoLinkTo[0].checked=true;
      rdoLinkTo[1].checked=false;
      }
    else
      {
      inpType.value="";

      if(sURL.substring(0,1)=="#")
        {
        inpBookmark.value=sURL;
        inpURL.value="";
        inpBookmark.disabled=false;
        inpURL.disabled=true;
        inpType.disabled=true;
        rdoLinkTo[0].checked=false;
        rdoLinkTo[1].checked=true;
        }
      else
        {
        inpBookmark.value=""
        inpURL.value=sURL;
        inpBookmark.disabled=true;
        inpURL.disabled=false;
        inpType.disabled=false;
        rdoLinkTo[0].checked=true;
        rdoLinkTo[1].checked=false;
        }
      }
    }
  else
    {
    btnInsert.style.display="block";
    btnApply.style.display="none";
    btnOk.style.display="none";

    inpTarget.value="";
    inpTargetCustom.value="";
    inpTitle.value="";

    inpType.value="";
    inpURL.value="";
    inpBookmark.value="";

    inpBookmark.disabled=true;
    inpURL.disabled=false;
    inpType.disabled=false;
    rdoLinkTo[0].checked=true;
    rdoLinkTo[1].checked=false;
    }
  }

function applyHyperlink()
  {
  parent.oUtil.obj.setFocus();
  if(!parent.oUtil.obj.checkFocus()){return;}//Focus stuff
  var oEditor=parent.oUtil.oEditor;
  var oSel=oEditor.document.selection.createRange();

  parent.oUtil.obj.saveForUndo();

  var sURL;
  if(rdoLinkTo[0].checked)
    sURL=inpType.value + inpURL.value;
  else
    sURL=inpBookmark.value;

  if((inpURL.value!="" && rdoLinkTo[0].checked) ||
    (inpBookmark!="" && rdoLinkTo[1].checked))
    {
    if (oSel.parentElement)
      {
      if(btnInsert.style.display=="block")
        {
        if(oSel.text=="")//If no (text) selection, then build selection using the typed URL
          {
          var oSelTmp=oSel.duplicate();
          oSel.text=sURL;
          oSel.setEndPoint("StartToStart",oSelTmp);
          oSel.select();
          }
        }
      }

    oSel.execCommand("CreateLink",false,sURL);

    //get A element
    if (oSel.parentElement) oEl=GetElement(oSel.parentElement(),"A");
    else oEl=GetElement(oSel.item(0),"A");
    if(oEl)
      {
      if(inpTarget.value=="" && inpTargetCustom.value=="") oEl.removeAttribute("target",0);//target
      else
        {
        if(inpTargetCustom.value!="")
          oEl.target=inpTargetCustom.value;
        else
          oEl.target=inpTarget.value;
        }

      if(inpTitle.value=="") oEl.removeAttribute("title",0);//1.5.1
      else oEl.title=inpTitle.value;
      }

    parent.realTime(parent.oUtil.oName);
    parent.oUtil.obj.selectElement(0);
    }
  else
    {
    oSel.execCommand("unlink");//unlink

    parent.realTime(parent.oUtil.oName);
    parent.oUtil.activeElement=null;
    }
  realTime();
  }

function changeLinkTo()
  {
  if(rdoLinkTo[0].checked)
    {
    inpBookmark.disabled=true;
    inpURL.disabled=false;
    inpType.disabled=false;
    }
  else
    {
    inpBookmark.disabled=false;
    inpURL.disabled=true;
    inpType.disabled=true;
    }
  }

function windowClose() {
  parent.oUtil.onSelectionChanged=null;
  self.close();
};


function showFriendlyUrl(val)
{
	//alert(val)
	document.getElementById("inpURL").value = val;
}
	


</script>
</head>
<body style="overflow:hidden;">

<table width=100% height=100% align=center cellpadding=0 cellspacing=0>
<tr>
<td valign=top style="padding:5;height:100%">
  <table width=100%>
  <tr>
    <td nowrap>
      <input type="radio" value="url" name="rdoLinkTo" class="inpRdo" checked onClick="changeLinkTo()">
      <span id="txtLang" name="txtLang">Source</span>:
    </td>
    <td width="100%">
      <table cellpadding="0" cellspacing="0" width="100%">
      <tr>
      <td nowrap>
      <select ID="inpType" NAME="inpType" class="inpSel">
        <option value=""></option>
        <option value="http://">http://</option>
        <option value="https://">https://</option>
        <option value="mailto:">mailto:</option>
        <option value="ftp://">ftp://</option>
        <option value="news:">news:</option>
        <option value="javascript:">javascript:</option>
      </select>
      </td>
      <td width="100%"><input type="text" ID="inpURL" NAME="inpURL" style="width:100%" class="inpTxt"></td>
      <td><input type="button" value="" onClick="openAsset()" id="btnAsset" name="btnAsset" style="display:none;background:url('openAsset.gif');width:23px;height:18px;border:#a5acb2 1px solid;margin-left:1px;"></td>
      </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td nowrap>
      <input type="radio" value="bookmark" name="rdoLinkTo" class="inpRdo" onClick="changeLinkTo()">
      <span id="txtLang" name="txtLang">Bookmark</span>:
    </td>
    <td>
    <select name="inpBookmark" class="inpSel" disabled style="width:160px">
    </select></td>
  </tr>

  <tr>
    <td nowrap>
      <input type="radio" value="bookmark" name="rdoLinkTo" class="inpRdo" onClick="changeLinkTo()">
      <span id="txtLang" name="txtLang">Internal Link</span>:
    </td>
    <td>
		<?php 
			$query = mysql_query("select * from tbl_cmspage where cat_is_deleted != 1 and cat_status=1 ") or die("Error in Query-:".mysql_query());
			if(mysql_num_rows($query)>0)
			{
		?>
			<select name="internal_link" id="internal_link" onChange="showFriendlyUrl(this.value)">
		<?php
			while($row= mysql_fetch_array($query))
			{
				echo '<option value="page/'.str_replace(" ","-",$row["cat_name"]).'/'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
				//echo '<option value="'.FriendlyURL($row["cat_name"]).'">'.FriendlyURL($row["cat_name"]).'</option>';
			}	
		?>
			</select>
		<?php } ?>	
	</td>
  </tr>


  <tr>
    <td nowrap>&nbsp;<span id="txtLang" name="txtLang">Target</span>:</td>
    <td><input type="text" ID="inpTargetCustom" NAME="inpTargetCustom" size=15 class="inpTxt">
    <select ID="inpTarget" NAME="inpTarget" class="inpSel">
      <option value=""></option>
      <option value="_self" id="optLang" name="optLang">Self</option>
      <option value="_blank" id="optLang" name="optLang">Blank</option>
      <option value="_parent" id="optLang" name="optLang">Parent</option>
    </select></td>
  </tr>
  <tr>
    <td nowrap>&nbsp;<span id="txtLang" name="txtLang">Title</span>:</td>
    <td><input type="text" ID="inpTitle" NAME="inpTitle" style="width:160px" class="inpTxt"></td>
  </tr>
  </table>
</td>
</tr>
<tr>
<td class="dialogFooter" align="right">
  <table cellpadding=0 cellspacing=0>
  <td>
  <input type=button name=btnCancel id=btnCancel value="cancel" onClick="windowClose()" class="inpBtn" onMouseOver="this.className='inpBtnOver';" onMouseOut="this.className='inpBtnOut'">
  </td>
  <td>
  <input type=button name=btnInsert id=btnInsert value="insert" onClick="applyHyperlink();" class="inpBtn" onMouseOver="this.className='inpBtnOver';" onMouseOut="this.className='inpBtnOut'">
  </td>
  <td>
  <input type=button name=btnApply id=btnApply value="apply" style="display:none" onClick="applyHyperlink()" class="inpBtn" onMouseOver="this.className='inpBtnOver';" onMouseOut="this.className='inpBtnOut'">
  </td>
  <td>
  <input type=button name=btnOk id=btnOk value=" ok " style="display:none;" onClick="applyHyperlink();windowClose()" class="inpBtn" onMouseOver="this.className='inpBtnOver';" onMouseOut="this.className='inpBtnOut'">
  </td>
  </table>
</td>
</tr>
</table>

</body>
</html>