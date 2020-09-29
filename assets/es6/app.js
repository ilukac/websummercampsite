//import '@babel/polyfill';
import $ from 'jquery';
import './ngsite';
import '../sass/style.scss';

$(() => {
  // Put your code here
});

function initBreakpointVideo(element) {

  const desktopPoster=element.data("desktop-poster");
  const desktopSource=element.data("desktop-source");
  const desktopSourceType=element.data("desktop-source-type");
  const mobilePoster=element.data("mobile-poster");
  const mobileSource=element.data("mobile-source");
  const mobileSourceType=element.data("mobile-source-type");

  const WindowWidth = $(window).width();
  if (WindowWidth < 640 && mobileSource) {
      element.attr("poster",mobilePoster);
      element.append("<source src='" + mobileSource + "' type='" + mobileSourceType + "' >");
  } else {
      element.attr("poster",desktopPoster);
      element.append("<source src='" + desktopSource + "' type='" + desktopSourceType + "' >");
  }

  console.log(element);
  console.log(desktopSource);
  console.log(mobileSource);

}

$(document).ready(function () {
  // Initialise all autplay videos available
  $('*[id^="video-multisource"]').each(function () {
    initBreakpointVideo($(this));
  });
});
