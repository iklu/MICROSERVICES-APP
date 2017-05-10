//eventuri pt fereastra  var remote = require('remote');
  var BrowserWindow = remote.require('browser-window');
  var win = BrowserWindow.getFocusedWindow();
  
function closeWindow() {
  window.close();
}

function maximizeWindow() {
   win.isMaximized() ? win.unmaximize() : win.maximize();
}

function minimizeWindow() {
  win.minimize();
}

function updateImageUrl(image_id, new_image_url) {
  var image = document.getElementById(image_id);
  if (image)
    image.src = new_image_url;
}

function createImage(image_id, image_url) {
  var image = document.createElement("img");
  image.setAttribute("id", image_id);
  image.src = image_url;
  return image;
}

function createButton(button_id, button_name, normal_image_url,
                       hover_image_url, click_func) {
  var button = document.createElement("div");
  button.setAttribute("class", button_name);
  button.style.float="right";
  //button.style.margin-right="2px";
  button.style.float="right";
  button.style.float="right";
  var button_img = createImage(button_id, normal_image_url);
  button.appendChild(button_img);
  button.onmouseover = function() {
    updateImageUrl(button_id, hover_image_url);
  }
  button.onmouseout = function() {
    updateImageUrl(button_id, normal_image_url);
  }
  button.onclick = click_func;
  return button;
}

function focusTitlebars(focus) {
  var bg_color = focus ? "#3a3d3d" : "#7a7c7c";

  var titlebar = document.getElementById("top-titlebar");
  if (titlebar)
    titlebar.style.backgroundColor = bg_color;
  titlebar = document.getElementById("bottom-titlebar");
  if (titlebar)
    titlebar.style.backgroundColor = bg_color;
  titlebar = document.getElementById("left-titlebar");
  if (titlebar)
    titlebar.style.backgroundColor = bg_color;
  titlebar = document.getElementById("right-titlebar");
  if (titlebar)
    titlebar.style.backgroundColor = bg_color;
}

function addTitlebar(titlebar_name, titlebar_icon_url, titlebar_text) {
  var titlebar = document.createElement("div");
  titlebar.setAttribute("id", titlebar_name);
  titlebar.setAttribute("class", titlebar_name);

  var icon = document.createElement("div");
  icon.setAttribute("class", titlebar_name + "-icon");
  icon.appendChild(createImage(titlebar_name + "icon", titlebar_icon_url));
  titlebar.appendChild(icon);

  var title = document.createElement("div");
  title.setAttribute("class", titlebar_name + "-text");
  title.innerText = titlebar_text;
  titlebar.appendChild(title);

//creare butoane 
  var closeButton = createButton(titlebar_name + "-close-button",
                                 titlebar_name + "-close-button",
                                 "./assets/images/close-window-16.png",
                                 "./assets/images/close-window-hover-16.png",
                                 closeWindow);
                                 
  var minimizeButton = createButton("top-titlebar-minimize-window-button",
                                 "top-titlebar-minimize-window-button",
                                "./assets/images/minimize-window-16.png",
                                "./assets/images/minimize-window-hover-16.png",
                                minimizeWindow);
                                
   var maximizeButton = createButton("top-titlebar-maximize-window-button",
                                 "top-titlebar-maximize-window-button",
                                "./assets/images/maximize-window-16.png",
                                "./assets/images/maximize-window-hover-16.png",
                                maximizeWindow);
                                 
  titlebar.appendChild(minimizeButton);
  titlebar.appendChild(maximizeButton);
  titlebar.appendChild(closeButton);

  var divider = document.createElement("div");
  divider.setAttribute("class", titlebar_name + "-divider");
  titlebar.appendChild(divider);

  document.body.appendChild(titlebar);
}

function removeTitlebar(titlebar_name) {
  var titlebar = document.getElementById(titlebar_name);
  if (titlebar)
    document.body.removeChild(titlebar);
}

function updateContentStyle() {
  var content = document.getElementById("content");
  if (!content)
    return;

  var left = 0;
  var top = 0;
  var width = window.outerWidth;
  var height = window.outerHeight;

  var titlebar = document.getElementById("top-titlebar");
  if (titlebar) {
    height -= titlebar.offsetHeight;
    top += titlebar.offsetHeight;
  }
  titlebar = document.getElementById("bottom-titlebar");
  if (titlebar) {
    height -= titlebar.offsetHeight;
  }
  titlebar = document.getElementById("left-titlebar");
  if (titlebar) {
    width -= titlebar.offsetWidth;
    left += titlebar.offsetWidth;
  }
  titlebar = document.getElementById("right-titlebar");
  if (titlebar) {
    width -= titlebar.offsetWidth;
  }

  var contentStyle = "position: absolute; ";
  contentStyle += "left: " + left + "px; ";
  contentStyle += "top: " + top + "px; ";
  contentStyle += "width: " + width + "px; ";
  contentStyle += "height: " + height + "px; ";
  content.setAttribute("style", contentStyle);
}
