<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="css/map-svg.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    $('svg #AM').tooltip({
      title: '<h4>Amazonas</h4> <ul><li>Item:Dado</li><li>Item:Dado</li></ul>',
      html: true,
      placement: 'bottom',
      container: 'body'
    });

    </script>
    <style>
        .cc-point:hover{
            stroke: #002868 !important;
            stroke-width: 2px;
            stroke-linejoin: round;
            fill: #95c9ff;
            cursor: pointer; 
        }
        /*.form-control {width:120px;}
        .popover {max-width:400px;}*/
    </style>

    <script>
        /*$("[data-toggle=popover]").popover({
            html: true, 
            content: function() {
                  return $('#popover-content').html();
                }
        });*/
        /*$(function () {
            $('[data-toggle="popover"]').popover()
        })
        $(function () {
          $('.example-popover').popover({
            container: 'body'
          })
        })*/
        
    </script>
    
</head>
<body>
<!--<a href="#" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">abc</a>
    <button data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"></button>
<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>-->

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1176.84 517.32">
  <defs>
    <style>
      .cls-1 {
        fill: #ddd;
      }

      .cls-2 {
        fill: #ccc;
      }

      .cls-3 {
        fill: #bcbcbc;
      }

      .cls-4 {
        fill: #e2e2e2;
      }

      .cls-5 {
        fill: #0b90af;
      }

      .cls-6 {
        fill: #fff501;
      }

      .cls-7 {
        fill: #045b71;
      }

      .cls-8 {
        font-size: 12px;
        font-family: MyriadPro-Regular, Myriad Pro;
      }

      .cls-9 {
        letter-spacing: -0.02em;
      }

      .cls-10 {
        letter-spacing: -0.01em;
      }

      .cls-11 {
        letter-spacing: -0.01em;
      }

      .cls-12 {
        letter-spacing: -0.01em;
      }
    </style>
  </defs>
  <title>Tapal Batas</title>
  <g id="map">
    <g id="map-2" data-name="map">
      <path id="east_timor" data-name="east timor" class="cls-1" d="M748.26,493l-2.74-2.37,2.45-1.4,2.55-1,5.33-1.53-1.38,3.56-2.88,2.37Zm36.79-5.76,29.26-11.72,7-3.75,6.73-5.07-2.8-1.6-2.87-.51-2.87.24-15.9,3.26-14.43.68-4.81.66-4.78,1.2-3.76,1.88-2.52,2.43L771,477.57,768,480.16l.94,2.68,2.54-.22,2,.06-.66,3.51-.95,1-1.09.11-1,.34-.64,1.7.33,1,1.73,3.34.47,1.32,6.45-4.45Zm-.72-26.45.9-.83,1.06-.68-.24,1.07-.43,1.22-1,2.19-1.83-1,.75-1.07Z" transform="translate(-12 -16.82)"/>
      <path id="brunei" class="cls-2" d="M517.4,126.2l0-4h2.86l1.82,3.26,1.68,4.62.69,4.25-1.21,2.13-3.53-1.16L518,131.21Zm-16.5,13,4.1,4.1,4.33,0,2-2.2.61-2.58-.81-9.4.52-2.68,1.91-2,3.88-2.29.42-1.48.1-.75v-.79l-6.36,2-11.49,7.56L493,130.12l3.9,3.74Z" transform="translate(-12 -16.82)"/>
      <polygon id="singapore" class="cls-3" points="221.24 194.68 218.94 195.38 217.38 197.65 219.67 198.71 222.01 198.9 224.24 198.21 226.15 196.63 223.81 195.21 221.24 194.68"/>
      <path id="malaysia" class="cls-4" d="M170,171.37h-1l.28-.4.19-.49.24-.5.45-.44.14,1.38Zm-28-63.76-.26,4.64,3.3-.58-.92-2.9ZM128,82.82l2.64-.16,1.16-.29,1.31-.77,1.12,2.8L132.74,86l-2.58-.28Zm459.85,56.5,1.92,1.31-3,.41-3,0,.79-1.82,1.44-.49ZM379.64,203l1.82,3.53,2,2.89,2.48,2.81,12.73,10.9,3,2,3.34.42,9.37-2.58,4.06-.45,12.28.48,2.93-.44,2.76-1,2.92-1.64,2-1.36,1.18-1,4.64-6.56,1.4-1,2.52-.89,8-.86,6.08,1.66,5.86,2.75,10.3,3.35,1.14.06,1.87-.49,1.82-1,3.27-2.51,2-.9,3.79-.41,7.74.06,2.84-1.17,1.24-1.7.6-1.91.4-2,.68-1.84.73-.79,1.88-1.36.52-.74.12-2.38-.47-2.14-.26-2.12.73-2.29,2.27-2.16,2.86-1.6,2.56-1.76,1.35-2.69-.41-1.21-1-1.62-.75-2,.23-2.32,2.19-3,5.48-1.9,2.47-2.48.89-2.73.83-14.4.79-5,1.87-4.49,3.6-3.15,3.06-.89,3.45-.25H569l2.75.3,2.69.68,1.91.92L578,139.7l1.78.92,2.12.41,2.12-3.3,2-.46,2.52.88,3.59.74,2.9-.29,9.25-2,2.48-1.2.23-2.7-2.35-2.2-3.2-2.09-2.36-2.37L598,121.79l1.92-1.61,3.59-.07,3.88.32,3.93-.24,5-1,4.65-1.74,3-2.54,1-3-.79-1.64-1.87-.89-11.89-4.13-2.9-1.66L603.24,100,601,99.1l-3.35.08L593.83,101l-1.84.2-1-1.74.61-.46L593,98.3l1.39-1,.56-1.58-1.94-2-4.23.41-8.71,2.56,1.57-.6.93-.88.6-1.12.6-1.36.72-5.6-.25-3.4-.91-2L576.83,77l-1.07-1.1-2-2.92-.34-1.29.13-1.21-.22-1-1.43-.62-2.45,1L565,76,562,78l.84-2.83.63-3.29-.41-2.53-2.26-.54L541.66,99l-5.32,6.07L532,104l-2.74,2.28L528,107.61l-.65,1.27.29,2.15,1.26,1.25,1.42.91.78,1.16-.75,3.59-2.72,2.27-3.7,1.29-3.65.67,1.82,3.26,1.68,4.62.69,4.25-1.21,2.13-3.53-1.16L518,131.21l-.57-5,0-4-3.88,2.29-1.91,2-.52,2.68.81,9.4-.61,2.58-2,2.2-4.33,0-4.1-4.1-4-5.33-3.9-3.74-1.51,1.24-.48,1.63-.13,1.93-.47,2.17L489,139.9l-2,2.57-4.55,4.68-14.11,17.33-5.71,3.93-7.37,2.27-15.42,2.58-7.21,2.25-1.48.69-1.35.79-1.19,1-1,1.32-.44,1.48-.06,3.17-.32,1.22-.88,1.44-1,.9-1.33-.11-2-1.57-.8,2.15.23,1.77.58,1.63.27,1.71-.26,1.69-.51,1.76-3,7.26-1.19,3.56.57,3.08,3.67,2.21-2.54-.17L402,205.23l-3-.92-10.65-.82-4.62-2-3-5.15-1.69,3ZM189.13,90.12l1-2.73,5,2L198.83,93l3.25,4.34,3.85,4.08,7.08,5.85,3.05,3.23,2.72,4,2.67,5.17,1.93,5.1,1.12,5.32.22,5.82-1.89,12.85,0,2.6.42,2,.59,2,.55,2.48.11,5-.41,4.95.27,4.81,2.15,4.53,1.67,1.6,3.91,2.75,1.63,1.59,1.25,2,8.24,17.19,2.2,6.35-.47,4-2.32.63-1.75-1.7-1.51-2.59-1.61-2.05.56,3-1,.8-1.8-.14-2,.17L228.71,213l-2.14.57-2.16-.48-1-.94-2.52-3.32-1.2-1.26-2.48-1.6-8-4L171.6,176.2l-1.12-1.37-.2-1.36.48-3.56,0-1.88-1.68-4.5-3-4.24-6.84-7.47-1.37-1.89-.82-1.71-.88-2.83-2.43-5.78-1.42-4.72-5-24.91-.92-9.78-.94-5-3.84-8.46L140,82.21l1-4.5.91-1.07,2-.23,4.89,3.88,1.62.92,1.34.15,2.89-.1,1,.21.91,1,.83,2.31.69.87,1.14.47,3,.76.9.45,1.43,2.93-.57,2.65-1.25,2.56-.6,2.7,1.89,4.15,4-1.34,4.75-3.23,4.25-1.52,1.73,1,.86,1.42,1.18.87,2.7-.67,2-1.91,2-3.25Zm53.36,85.08.43-.62.84,2,0,1.18L243,178l-1.45-.73.27-.72.33-.7Zm181.17,9.85-1-2.71-.06-2.93,1.06-2,.89.81.44,2.86.29,5.26ZM571.1,59l2.92-.28-.24,1.81-2,2.47-2.36,1.76L569,63.05l.11-1.56.71-1.38Z" transform="translate(-12 -16.82)"/>
      <path id="indonesia" class="cls-3" d="M16.86,98.09l-1-1.55,1.18-.25,1,.2.82.53.8.73-.86,1.18-.94,0Zm1101,368.09,2.64-.19,1.33-1.6-.71-3.47-2.55-.38-3,1.36-2.17,1.75,1.73,1.64ZM559,468.27l-2.44,6.17.33,4.25-4.44.78-5.34,0-5.06-1-3.62-2.34,1.06-.64,2.2.52,1.15-.47.76-1.1.1-1-.05-1.11.91-3.63.06-1.41.49-1.34,1.87-2.08,1.22-1,1.35-.88,1.46-.63,1.52-.3,6.76,1.87Zm-30.11,6,.55.66.62.62.67.55.72.48.5-1.71-.33-1.12-1-.28Zm240.54,16.14-.33-1,.64-1.7,1-.34,1.09-.11.95-1,.66-3.51-2-.06-2.54.22-.94-2.68-5.75,3.92L759,485.71l-3.18.93-1.38,3.56-2.88,2.37-3.33.39-2.74-2.37-3.91,2.7-3.79,3.88-2.73,4.57-.73,4.76.28.71.53.9.53.73.24.2.14-.05.42,2.2v.25l-.24,1.48-1,.92-.26,1,1.88,1.62,2.91.64,3-1,5.48-3,6.93-1.85,2.29-1.15,4-3.32L771.65,495l-.47-1.32Zm-37.59,22.51-4.32,3.76.35-2.1,1-1.84,1.42-.81Zm11.63-47.55,1.06-1,1.34-.1,1.51.88,2-2.87,1.56-1,.59,1-.86,3.14-1.91,3.37-1.57.27-1.8-1.07-2.65-.67ZM829,226.87l-.9.38.19,1.57,1.47-.59Zm28.81-44.51,3.86,0,.89,4.16-1.45,5.37-3.17,3.6-4.84.2-1-4,1.89-5.35Zm-44.14-39.89-.34,1.66,1.54,1,1.94-3.19L818,137.6l-.51-4-3.06-2.31-.56,2.52.53,1.84.83,1.5.33,1.47-.74,1.9Zm1.59,8.06.73.86.38.33.19-1.41-.29-.39-1.37.34Zm-3.9-6.17.24,1.47.43,1.39.63,1.32.83,1.23.2-1.58-.28-1.45-.78-1.29ZM779.82,176.3l-.78,1.51.94,3,.51-1.54.06-1.07-.27-.89Zm4.46-16.4,2.3.11-2-4.13-1.2-1.89-1.57-1.66.32,2.76.75,2.85ZM583.81,141.07l.84,3,3,.95,2.58-1.14-.47-3.26-3,.41Zm-1.66,19.11,2.47.57-.07,1-.22,1.06-.6,2L581.84,163l-.57-1.81ZM195.79,213.36l2,2,1.07,3.19-.41,3.12-1.95,1.58L194.9,221l-1.08-3.81-.43-3.32Zm27.57,7.82-.37-.88-.45-.87-.47.35-.4.38-.76.87,1.2,1.41.67.43,1,.17-.16-.94ZM195.66,208l-4.33-1-3.26.79,2,2.28,3.32,1.57,3.68,1.29,3.15,1.43-1-3.81Zm26.62,18.77-.27.55-.37,1.29.41.84,1.75,2.44,1.13-1.44,0-1.49-.82-1.44-1.46-1.27Zm16.38-7.92-1.21.68-.92,1.51,1.6,1.72,1.69-.2,1.36-1.56.6-2.39-1.66,0ZM219.58,232l-1.82-.95-1.3,3.48,3.38-.31Zm-41.86-28,3-1.78,1.16-3.63-1.79-3.36-3.46-.64-3.17,1.62-.95,3.47,2,3.67Zm23.2,16.87L200,222.2l-.91,3.52,3.25,1.84,7.35,1.51,3.45,1.33v-3l-2-2-8.67-4.25Zm40,4.1,0,.3-.19.33,1.93,1.79,1-.18-.3-1.3-2-1.54-.33.3Zm7.37-6.73-2.13.81-1.77,1.88,1.34,1.42,2-.2,1.52,0-.23,1.92,2.71,2.64,1.76-1.5.51-3.74-1-4.09Zm34.9-43.73,1.53-2.58-.88-.58-1.89-1-.9-.61.2,2.68.75,1.93Zm12.88-7.24-1.35-1.41-.5.36.42,1.32,1.39,1.5ZM255,246l-.91-1.09-.93-.94-1-.77-1.21-.53,1,1.55,1.17,1.4,1.35,1.2,1.54.94-.21-.48Zm-21.9-19.15-.69-.39-.7-.28.79,1.48.58.62,1,.47-.4-1.21Zm-5.22,27.83-2,.78-1.25,2.42,2,.48,2,0,1.91-.49,1.72-1-2.15-1.6Zm20.78,3.19L246.36,259l-1.61,1.62,1.05,1,.8,1.19.54,1.33.3,1.48,3.62-2.13,1.51-1.59.05-2.13-1.71-1.87Zm5.74-3.19L256,254l3.9,2.14,1.84.36,1.94-.59-4.11-3.67-1.71.46-1.95-1.19-2-1.85L252,248.2l-.33,1.47-.51,1.39-.7,1.29-.88,1.18,1.49.94,1.62.36Zm-42.46-34.13L208.44,219l-2.84.82,1.78,1.91,6.39,4.18,2.73.36-1.27-2.54Zm130.17-67.47,1.27.8,1.34.33,1.39-.15,1.46-.6,1.89-3.9-.59-3.12-1.68-3-1.34-3.59-3.62,2.73-2,3.45.79,3,4.69,1.34-2.61,2.14ZM47.36,186.71l-.69-2.4-2.55-2.42-5.31-3.54-2.56-2-2.7-1.76-2.64-.53-2.37,1.68,3.2,4,6.29,4,6.25,2.75Zm47.15,62L96,252.77l.14,2.89-2,6.71L98,262l1.51-5.05-1.09-5.75ZM77.27,216.25,74.16,212l-1.85-2L70,209l-1,.51-1.64,1.2-2.07,1.08L63,211.9l6.42,7.82.55,1.09.73,2.46.56,1,.8.51,2.31.91,1,.78,3.89,6.43,1.75.61,2.42-3.35,1.06-4.5-1.36-3.48Zm-7.79-21.12L69.05,193l-1.3-1.32-1.86-.52-2.13.31,1.58.8ZM361.23,171.9l-.68.71-.6.78-.52.83,1.35.22.85-.34.38-1-.07-1.8Zm811,252.24-.16-4.67,2.29-6.85,0-91.65v-5l-3.08.3-1.44-.82-.94-1.32-1.55-1.25-2.35-.78L1143.79,309l-5.06-1.75-40.91-18.59-3.93-.62-4,.91-9.3,4.41-2.07,1.19-1.37,1.37-.33,1.47.36,1.36.24,1.45-.65,1.76-4,2.82-10.64,1.34-4.33,1.87-1.18,1.68-1.37,4.07-1,1.78-1.54,1.44-3.46,2.48-1.52,1.49-7.73,9.76-4.78,3.67-5.78,1.24-4.93-1-3.09-2.3-1.66-3.62-.65-4.94-3.33.56-.95-2.89-.16-4-.92-2.9-2.38-.72-1.11,2.17-.86,5.83-6-12.65-2-6.56-.44-7.08.63-2.82,2.14-5.25.49-2.83-.5-2.79-3.92-8.59-.19-1.32.37-.68.07-.71L999,269l-1.1-.8-1.22-.37-12.36-1-3.32-1-11.75-5.91L963.14,258l-6.72.12-5.42,2-9.73,6-10.41,4.12-2.06,2.33-1.19,3.22-4.7,8.54.32,1.09,6.51-.6,2.92.47,3.77,1,3.7,1.28,2.71,1.28,1.76,1,.89,2,.52,1.54.57,3.51.53,1.6,4,4.94,5.35,2.61,6.16,1,13.08-.07,6.94-.71,6.83-1.32,6.34-2.08-.44,1.42-.71,1.31-1,1.18-1.19,1,2.58.86-1.15,2.24-2.43,2.82-1.3,2.62-2.08-1.48-2.6-1.14-2.76-.83-2.62-.54-3.4-.25-2.18.69-1.89,1.59-2.53,2.48-2.76,2.23-2,.66-2.08-.3-3.07-.71-3.9-.4-3.16.32-6.78,1.91,2.39,3,4.16,2.13,4.63,1.84,3.82,2.11,4,3.28,1.76,2,1.1,2.27.21,2.68L967.15,344l-.22,2.59,1.3,4L971,353.4l3.7,1.08,4.06-1,2.7-2.91,2.5-4.89,1.61-5.19v-3.81l3-1.44,1.65-7,3.54-.79L991.65,331l-1.58,3.19-.34,3.34,1.58,3.95,1.83,2,2.22,1.44,4.16,2.08.38.1,2.39.91.34.16,1.43,1.88.46.44.72,0,1.7-.8.74-.09,3.3.47,6.09-.26,3.16.52-4.81.86,2,4.18,5.12,4.83,4.64,2.84,5,.89,10.58.58,5.19,1.14,14.29,6.54,12.08,4,3.84.64,2.7-.48,2.88,3.58,4.68,2.75,5.07,2.43,4,2.61,2.54,3.62,1.09,2.9,1.81,1.53,4.73-.51-1.29.65-.81.75-1.44,2,1.11.25,2.12.65,1.2,0-1.43,5.28,3.72,8.15,5.68,8,4.43,4.87-5.56,2.24,1.88,3.28,5.7,2.67,5.89.44-2.8.65-5.48-.18-2.58,1.11,3.8,3.32,1.82,2,1.17,1.66.85,2.37-.06,1.92-4,9.37-.72,2.59.4,1.89,2.24.39,2.93-1.57,2.68-2.5,1.54-2.38,3,4.7,6.77.09,7.38-2.68,4.84-3.64-2,3.59-.8,1.78-.09,1.71,1.61,2.48,2.94,2.56,5.45,4.06,10.56,11.59,4.08,3.39,0-57.64ZM769.05,460l3.79,1.45-.47,3.35-9.55,2.11-5.3.51-3.44-1.19,0-2.12,1.27-3.05,2-1.8,2.35,1.6,4-.89Zm89.66-120.06,1.41,1.23-3.26,1.15-1.07.21.57-2,1-.82Zm21.37-90.44-1.07-2,3.54,2.68,1.52,1.51,1,1.8-1.75-.91-1.74-1.36Zm10.71,201,1.57,1.81.18,2.8-1.69,1.14-2.47-.54-2.2-2.21.71-2.34,1.81-1Zm-28.95-15.88-2.55-1.48,2.52-1.31.86,1.43Zm158.74-161.19,1.29.68,1.14,1.26-.94,1.82-1.23.56-1.33-.61-1.25-1.68,1.06-1.72ZM915.08,278l-1.66-4,4.13-1.86,4.13.37,2.33,2.64-1.3,5-3,2.68-2.54-1.31Zm2.51-7.09-10.89,1.58,2.45-1.94,6.23-.86,1.56-1.3,2.49.32-.34.73-.43.51Zm18.93,176.43-3.11,3-2.1,2.92-2.45,2-4.15.29-.11-5.19,2-4.89,3.3-4.5,3.65-4,2.67-3.58,1.71-.82,2,1.43-.37.65-.32,6.38-.44,1.69-.61,1.65-.79,1.56Zm-20.38,17.38,1.47-2.06,2-2.08L921.5,459l2.09-.64,2.7.61-2.46,1.68Zm138.18-189.58,3.6,1.74-2.1,2-2.5.86-2.71-.09-2.68-.81-2.49-1.49-1.33-1.84-2.09-5.66-2.45.85-3-.86-2.57-2-1.23-2.46,10.1,1.1,2.82.82,3.17,2.3ZM1007,301.21l.47-.19.91.55-.76,1.54-.45.33-.91-.75Zm28.1-11.51,32.15,3.72,3.76,1.65-9.48,1.6L1057,297l-4.68-.59-10-2.48-5.06-1.94Zm-122.6-29.81,1.32.86-1.22,1.11-1.34.42-1.45-.22-1.52-.86,1.42-1,1.41-.45Zm-65.93,32.17-11.8,1.17-3.13-1.15-.93-2.26.87-2.66,2.24-2.35,2.74-1.24,2.48.12,2.5,1.07,2.76,1.62,4.78,4.06ZM844.23,462l-3.77-3.26,6.37-.27.39,2.27Zm-9.18-128.76.76.54.68,1.55-1.09-.22-.88-.42-1.61-1.2,1.21-.21Zm28.88,8.37-1.32-.25-1-.38-.57-.76-.13-1.39,1.57.25.79.56.37.85Zm-14.18,3,0-.32-.07-.33-.14-.39-1.42.87-2,.92-1.7.18-.49-1.4,1.46-1.81,3-1.54,3.32-1.05,2.47-.34-.59,2.05-.85,1.84-1.31,1.3-2,.42Zm-7.14-18.94,1.95-.89,1-.34L844,326.32l-.87.31-1.48-.47Zm-8.25-119.54,4.84-9,7.6-5.17-.43,1.88-2.15,3-.71,1.7-.09,1.91.45.87.73.78.74,1.61,1,5.11-.3,4-1.76,3.54L840.9,220,838,221.79l-1.19,1.13-.23,1.6.78,1.21,1.45,1,1.65.56,1.4,0,2.18-1.66,2.24-3.16,3.43-5.72,2.44-3.11,3.62-3.7,4.08-2.16,3.84,1.49L865,213l-.94,4.15-2.33,3.76-2.87,2.55-5,3.4-.45,2.05,7,5.26,1,1.32,1.13,2.78.71,1.15,1.33,1,2.73,1.41,1.21,1.29-19.9-6L846,237l-1.68,1.44-1,3.74.32,8,2.8,8.2,4.56,7.48,5.6,5.83-5.72-1.92-5.86-5.47-4.78-6.75-2.49-5.74-.11-2.15.58-4.52-.06-2.1-.52-1.68-1.5-2.31-.8-1.62L835,234l.31-3.71,0-3.31-1.51-2.19-1.26-8.61ZM829.6,445.54l.35-1.71v-.91l2.09.65.38.95-.95,1-1.91.86Zm-1.32-186.41.51-1.81.72.36.84.3.87.41.86.74.43-.91.61-1,.8-.6,1,.24,1.83,2,.07,1.64-.52,1.44.09,1.44.15.57.07.7.18.81.45.91.61.17,2-.23.59.18.46.42.61.38.61.49.4.72-.25,2.3-2-.26-3.89-2.19h-1.08l-2.15.82-1-.23-.68-1.23.34-1.28,0-1.24-1.61-1.14-1.33-1.46-.59-1.7Zm32,62.84L873,323l.93.22.71.34.89.25,1.44,0,1.44-.55,2.56-2,1.43-.6,3.09.1,2.93,1.06,5.68,2.66,3.23.65,6.53.44,3,.82,2.74,2,2.17,2.78,5,8.45.81,2.06,0,2.5-.7,4.11L892,334.63l-2.13-.65-2.76.25-1.37.72-.84,1-.4.9-.05.37-2.33.15-2.6-.43L870,333.9l.11-.27.14-.59-.05-.61-.47-.31-3.58,1-2.82,2.45-2.93,1.87-3.89-.69-3.32-4.36L851,330.69l-2.37-.24-1.22,1.36-2.45,5.39-1.06,1.91.25-3.16-.22-2.37.24-2.37,1.63-3.15,3-3.39,3.19-1.8,3.73-.73Zm-30.1-92.34,1.16.1v2.11l-1.39.23Zm1,16.13.31-.78.27,1.16.16,1.13.05,1.14-.05,1.19-.26-.45-.31-.34-.74-.58.15-.85Zm171.15,169.89.39-.08-1.82-1.65-.6-2.3.66-2,1.93-.75,1.71,1.1,5.4,4.79,1.18,1.27-1.06,4.31-3.34,4.37-4.12,1.92-3.37-3,1.21-7.73.7.05.62-.11Zm14.38-7.87-.4,2-.84,1.79-1.53,1.55-4.63-1.64-4.64-3.54-2.13-3.25,2.9-.79.67-2.45-.28-2-1.09-1.72-1.75-1.71,4.21-1.43,3.29-3.45,2.75-1.51,2.59,4.36.65,2.81.39,3.05.14,3Zm-48.16-4.45,6.83-17.55.81,3.44-1.87,5.39-3,5.36Zm12.05-48.59,5.85,3.48,1.77,1.39-2.26-.73-2.27-.95-1.91-1.33Zm37.93,58.35.53-.68,1.16-.38-.45.93-.57.79-1.28,1.36Zm-53-18.57,1.47,2.3.25,2.82L966,402.27l-1.59-1.63-.42-2.19-.15-2.49-.78-2.5Zm48.18,27.61,1.1-1.57.64-.5,1-.25-.31,1-.43.93-.56.87-.68.86-.29-.35-.15-.34-.1-.34Zm1.13-4.21-.49-.39-.52-1.51.81-.41.49.17.43.47.67.51-.81.78ZM902.5,254.06l5.33-3.95L917,249l8.88,1.93,4.59,5.23-4.49,2.57-4.94-2.2-4.77-3.69-4-1.95,1.26,1.55,4.34,3.93.38,2.84-1.51.79-1.92-1L914,256.3l-1.42,1-1,.17L904.2,255Zm-8.68,46.06-4-3.32,5.68-2.47,3-.84,3.06-.16,3.2-1,1.46,1.73.88,5.47-4.39,1.08-4.53.51ZM945,432.59l1.13,1.35.27,2.18L945.19,435l-1.38-.94-1.48-.77-1.49-.64,2.33-.48Zm172.49,25.89-4.38,3.75-4.95,2.5-6.22,1.58-6.35.4-5.37-1.06,4.19-10.17,7.83-11,9.72-6.11,9.89,4.53,1.61,5.24-2,5.42ZM824.73,255.72l3.17.27-.31,1.65-.21,1.72-.59,1.55-1.49,1.18-1.85-1.51-.19-2.73Zm2.35,9.48,1.08,3.59-3-.53.28-2.22Zm-7.85,64.63,4.28,4,2.35,4.46-.45,3.43-3,2.58-5.18,1.94-4.7.48-4.87-1.1-4.56-2.28-3.78-3.09-1.58-2-1.52-2.7-.8-2.89.61-2.53,1.38-1,2-.39,10-.79,5.17.13Zm-23-17.48-1.72-2.25L793,306.91l-.84-3.36.16-2.78,1.3-.77,1.31,3,1.95,6.69-.16,1.43-.19.63ZM792.49,448.8l1.6-1.34,1.55-.24,4,.55h1.94l2.21-.72,4.14-2,2.24-.43,1,.42,3.64,1.95.81.65-.59,1.11-1.57.74-3.67,1.15-1.74,1.09-.86.9-1,.67-2.07.42-3.88.05-3.19-.24-3.18.24-3.83,1.47.26-2,.82-2.29Zm-89.18-69.06.53-2-.12-2.21-.49-1.26-.06-1.12,1.16-1.8,3.14-2.59,2.86-.44,2,1.68.67,3.71-.43,2.25-.9,1.65-1.11,1.62-1.08,2.14-.13,1.69.45,1.41,0,1.38-1.29,1.62-1.85.54-2.34-.33-2.12-.79-1.15-.84.48-2.34Zm-11.17,8.84-3-4.21L690,382l1.15-1.65,1.5-.3,1.88,1.61,1.34,3.92-1.12,2.88Zm41.54-99.37.81,2.86-3-.06.28-4.26Zm-.7,96.25,1-.71h.65l.33.84,0,1.8-.89-.2-.46-.43-.3-.6ZM731.9,282.08l.5,3.54-3.82,1.9-1.7-1.78-.76,1.18-.68,2.15L724,290.21l-.85-.91,0-2.17.22-2.6-.27-2.24-1.72,1.77-3,3.83-1.83,1.7-1.74-3.12,0-3,1.39-2.49,2.45-1.71,3.76-1,1.73.94.66,2.25.56,3,3.62-4Zm47.82,14.1,5.17-1.58,6.53-.18,12.22,1.24-5.22,1.83-7.65,1.26-7.2-.16Zm-124.88,114-.48-1.82.29-2.65.19-5.24.58-2.6L657,402l.35,4.63-.54,4.69-1.11,4.37Zm84.82-110.4-.24-.71-.46-.88h.33l.53.13.67.57.72,1.29-1.09,0Zm33.67-2.36-2.14,1-1.72-.2-1.7-.56-2-.08-1.62.55L761,299.65l-1.68.39-3.28-.59-2.46-1.9-.67-2.75,2.07-3.17,4.52-1.06,6.6.71,6,1.61,2.82,1.68,2.46.62.29,1.23-1.49,1ZM744.72,402.9l-.42-.78-.31-1.59.81.42.42.54.27.67.41.8-.66.14Zm-23.93-51.43h2.49L725,352.7l.08,2.5-1.8,2.43-2.16-.25-1.83-2-.81-2.75Zm1.57-56.16.79.19-1.87,2.13.12-1.75.36-.61Zm-6.81,73.47,1.78-4.52,3.84-2.39,2.16,5.21.8,2.69.11,3.38-2.4-2.19L720,373.84,719,378.72l-.15,3.83,2.1-.34,1.9.87,1.09,1.65-.29,2L722.27,388l-1.56.26-1.6.07-1.48.7-.77,1.37-.42,1.72-.59,1.69-1.32,1.3-1.68.26-1.77-.62-1.48-1.27-.82-1.65,1.19-3.28,3-6.32,1.19-3.48ZM688,259.34l1.85,0,1.78,1-1.38.72-3.24.56-1.75.65,1.11-1.9Zm46.58,208.48-1.27,2.54-3.89-.18-4.29-.76L726.6,468l4.73-4-.68-.25-1.46-.84,6.76-.58,1.95-.54,1.55-.61,1.5.05,1.75,1.47-2.84.69L737,465.29Zm-44.09,55.3,2.28-2-.86-1.37-5.4,2.62Zm16-49.15,2.07-.69,2.13-.94,2.64-1.41.66-.7.11-.81,1-1.71,1.52-1.49,1.4-1.1.94-1.26.14-2-.88-2.31-1.6-1.25-1.83.18-1.6,2,1,.16,2,.64,1,.14-2.13,2.17L712.46,465l-2.82,1.28L707,467.83l-1.41,1.51-1,1.47-1.36,1-2.63.08-2.61-.8-4.26-2.28-2.65-.49-2.48.39-4.93,1.74-2.12.34-5.45-1.31-11.2-5.37-5.52-1.8-2.18-.22-2.45,0-2.5.28-2.29.53-2.44,1.22-2.36,1.56-2.42,1.06-2.61-.24-1.14,3.1-.46,1.62-.1,1.55.63,2.67,1.14,1,21.7,1.43,6.26,1.88,4.16-.44,7.22-1.92,3.88-.46.6.28,1,1.27.62.31,1.13-.1L699,475.36Zm-69-206.44-1.33-.68-1.56.58-3.12,4.31-2.65,4.68-1.93,5-1,5.25.09,2.1.75,4.44v2l-.66,2.25-1,1.84-1.14,1.79-1.08,2.07-.69,2.39-.86,4.92-.92,2.26L619,314l-3.52,1.93L614.3,317l-.75,1.28-.23.75-.05.75-.16,1.28.13.67,1,3.18-.08,1.4-.63,3.05-.09,1.51.32,2.33.72,2.57,1.21,2.28,1.78,1.51,2.26.12,5.11-1.79h2.39l2.33,1.43.76,1.89.09,2.31.31,2.68,2.53,8.55.56,4.16-.48,5.2-5.1,18-.17,4.72,1.63,4.44,3.27,3.18,4.8.94,3.91-1.11,4.1-1.7,4.22-.88,4.29,1.34-.9-4.72-1.3-4.07-.82-4.08.52-4.78,1-5.49-.25-15.81,1.15-10,.22-4.84-1-5.48-2.21-4.66-.64-2.25.44-2.59,1.5-1.91,2.51-1.93,2.78-1.64,2.28-1.06,9.08-.13,1.18,7.21-2,9.54-.48,6.85,3.8,4.17,10.49,6.77,2.55,3.82-.64,3.8-1.64,3.89-.65,3.94,2.35,4,2.1,1.1,3.13.91,3.17.4,2.21-.43,1.19-1.56.38-4,1.13-2.13,3.82-1.85,9.37-1.21,2.14-2.1,3.37,1.21.91-2.22-.76-3.52-1.66-2.7-.25.09-1.19-.32-1.44-.53-1-.52-.81-.91-1.66-2.72-.94-1.23L701.83,343l-.85-2.19.58-3.9,1.11-4.42.15-1.76-.15-2.16-.33-1.46-.63-1.62-.78-1.54-.79-1.2-5.45-6.32-3.32-5.26L689.72,309l-1.83-1.91-2.18-1.93L682,302.68l-1.82-1.47L679,299.46l-.83-1.82,0-.48.87,0,3.7-.53,1.48-.06,1.52-.26,12.86-6.85,4.67-3.18,3.61-3.92,3.29-4.19,3.74-4,4.57-1.91,4.18.92,3.67,1.23,3-1,1.29-2.89-.61-2.89-1.85-2.42-2.43-1.48-2.61-.34-2.84.41-2.81.84-2.49,1,.46.58.69,1.35.35.55-12.25,0-3.08.59-2.28,1.11-2.15,1.3-2.7,1.16-2.92.27-2.3-.76-2-1-2.09-.51-2.74.67-2.38,1.71L677.47,275l-4.94,7.2-1.75,1.46-2.77.89-2.81.14-2.46-.52-2.12-1.1-1.77-1.6-.77-1.38-.91-3.25-.74-1.39-1.35-1.16-3-1.34-1.4-.91-1.82-1.93-1.58-2.21L646,265.5l-1-2.52-1.14-5.76.39-5.83,1.78-5.57,3-5,5-4.18,5.19-.83L671.05,237l39.89-1.28,6.72.51,6.17,1.71,4.63,2.15,2.35.65L734,241l7.35-.62,7.24-1.41,5.58-2.38,4.43-3.78,11.11-13.1,3.51-5.46,1.72-5.39-2.25-3.62-3.76.44-3.91,3.12-6.15,6.76-8.4,7.12-4.82,2.89L740.32,227l-3.43-.12-12-2.31-3.15-.26-1.45.12-1,.46-2.09,1.53-.65.34-2.3-.37-2.11-1-2.08-1.16-2.2-1-3.42-.85L691,221.29l-5.94.05-2.46-.52-1.3-.9-2-2.53-1.26-1-5.63-1.88-4.07.93-3.32,3-5.1,6.53-1.61,1.19-1.87.51-2.52.08-1-.58-1.08-2.39-1-.39-.67.81-9,13-1.43,3.4-.23,2.6.17,2.52-.23,3.13-.56.84-.94.26-.93.12-.51.4-.16,1.56.16,1.77,2.73,13.65.19,3.45-.84-1.87Zm-19.93,207,1.84-.13,1-2.58-1-3.84-2.82-3.59-3.31-1.22-2.42,3.28-1.84-3.22-2.38-.08-2.66,1.16-2.64.53-2.36-1.11-3.26-3.93-2.45-1.41-3.67-.27-2.27,1.32-.42,2.45,1.84,3.13,2.21,1.28,3.33,1.38,3.06,1.56,1.38,1.82-.71,1.09-1.72.93-2,.68-1.45.32-2.21.12-1.53-.31-1.36-.81-5.46-4.64-1.78-.81-6.42-1.37L570.7,466l-3.23.72-3,2.08-1.7,2.7-.48,2.76-.13,2.94-.68,3.26,7.65,3.37,12.47-1.6L594.23,478l8.06-4.78.91,3.79,2.89.63,3.86-.55,3.83.27-.44-.46-1.23-1.53-.53-.57,3.31-.74Zm-33.2-14-3-1L580.21,463l.93,2.24Zm142.95,2.42-2.3-1-3.11,1-1.94,2.89,6.89.08Zm-66.64-30.1,1.33-.38,1.16-1.23-1-.22-1.83-.68-1-.27.24,2.07Zm-39.46,67.41,3.13,1,7.05,1.13,3.25.79,3.12,1.32,3.08,2.12,5.75,5.54,3.22,2.09,4.12.88,3-.42,3.49-1.31,2.8-2.16.94-3-1.69-3.33-3.33-2.57-6.52-3.59-6.35-5.91-2.57-1.41-.37-.32-.57-1-.44-.29-.9.15-1.59,1.13-.93.25-11.44-.21-4,.4-3.67,1.22L617,495.23l1.69,3.17Zm8.59-25.34.42-2.45,1.23-2.14.29-1.88-2.38-1.66-.3,1.12-1,2-.4,1-.1,1.6.22,1.31.7.87ZM620.9,460.5l-.52-.64-1.84.94,1.71.49Zm98.65,6.77-1.17.72-1.18,1-.6,1.12.57,1,.89-.37,3.39-2.29,1.71-.47-.85-.61-.82-.19Zm3.56,62.38,5-3.85.56-5.55-2.94,1.41L717,527.15l-2.3,1.92,2.7,1.93ZM364.42,219.29l3.74-3-.71.13-2.36.23,2.06-6.42,3.46-5.78,4.61-4.77,5.53-3.35-1.69,3,.58,3.57,1.82,3.53,2,2.89,2.48,2.81,12.73,10.9,3,2,3.34.42,9.37-2.58,4.06-.45,12.28.48,2.93-.44,2.76-1,2.92-1.64,2-1.36,1.18-1,4.64-6.56,1.4-1,2.52-.89,8-.86,6.08,1.66,5.86,2.75,10.3,3.35,1.14.06,1.87-.49,1.82-1,3.27-2.51,2-.9,3.79-.41,7.74.06,2.84-1.17,1.24-1.7.6-1.91.4-2,.68-1.84.73-.79,1.88-1.36.52-.74.12-2.38-.47-2.14-.26-2.12.73-2.29,2.27-2.16,2.86-1.6,2.56-1.76,1.35-2.69-.41-1.21-1-1.62-.75-2,.23-2.32,2.19-3,5.48-1.9,2.47-2.48.89-2.73.83-14.4.79-5,1.87-4.49,3.6-3.15,3.06-.89,3.45-.25H569l2.75.3,2.69.68,1.91.92L578,139.7l1.78.92,2.12.41-2.41,2,1.17,2.37,2.63,2.45,1.94,2.29.51,2.92-1,1.65-2-.07-2.47-2.26-1.63,2.22-3.09.59-6.77,0,1.9.49,1.9,1,1.66,1.35,1.18,1.57.44,1.65-.07,1.67-.19,1.45.11.94,2.14,1.93,2.55,1.15,2.15,1.41,1,2.75-1.74.56.86.19,1.58.65.81.24-.83.73-.37.41-.29.46,2.64,1.56,2.88,3,2.48,3.47,1.42,2.82.47,3.19-.78,2.66-2,2.16-3.26,1.71,2.83,2.52,5.19,5.9,2.87,2.69,12.1,8.95L614,220.1l1.71,1.48,1.18.73.21.89-1.2,2-1.7,1.23-2.42.72-2.56.35-2.1.13-5.22-.64-3.83-1.86-3.48-2.43-4.13-2.32,1.3,3.75L590,227.45,587,230.63l-2.63,3.16-2.71,5.89-1.7,6.35-.62,6.52.51,6.4,1,6.22-.44,2.68-7.52,5.21-6.71,6-3.42.82-2-4.34,0,1.41.71,2.82,0,1.12-.82,1.75-1,1-1.15.82-7.84,8-1.7,2.24,3.27.34,1,2.76-.88,3.5L550,303.84l2.83,1.1,2.56,1.57,1.3,2.31-1,3.3-1.53,1.31-1.66.29-1.53.41-1.15,1.67,1.72-.65-.1,3.24-.64,3.87-1.6,2.62-3-.53,0,1.42.4,1.32.79,1.19,1.15,1-2.51,2.33-1.58,2.89-1.31,3.08-1.67,2.88-3.57,2.93-4.83,2.29-9.67,3.7-8,4.44-4.56,1.79-3.24-.35-.89-3.11-2-16.4-2,2.29-2.22-.41-1.23-2.27.9-3.27-1.77,2.67h-1.62l-1.59-1-1.65-.48-3.2,1.54-2.57,2-2.52.86-3-1.88-.3-1,.07-1.34,0-1.36-.65-1.07-1.24-.32-1.22.48-1.18.64-1.17.17-2.56-1.08-2.32-1.78L467,324.33l-.87,3.5-1,2.51-1.75,2-3.07,1.88-3.42,1.16-2.55-.11-2.5-.55-3.27-.18-5.1,1.92-3.62,2.73-2.23.27-.94-5.43-.17-5.56-.76-2.7-1.81-1.9-1,.08-5.72,1.18-10.47,1.36-4.8-.28,1-2.49-1,.52L409,326l-.88.37-.93-.45-1.48-1.84-.76-.46-2,.29-4.92,1.27-1.63-.28-.79-2.18L393,302l-.9-3.17-.86-1.45-.88-.74-.71-1-.37-2.1.24-1.38,1.2-3.39.28-1.68-.38-3.13-1.06-3-1.62-2.76-2-2.35-4.46-2.22-6-2.32-3.67-2.74,2.55-3.5-4.1-3.24L368,257.11l.21-5.08,3.19-4.18L366,241.6l-2-3.32-1.17-4.06-.47-5,.32-5.29Zm-86.94,69.52-2.09.56L272.9,292l-.3.82-.53,2.6-.5,1.2-1.36,1.2-1.49.6-1.22.87-.56,2,3.45.85,6.51.26,3.17.84,2.52,1.85,2,2.73L286,311l1.1,3,.24,1.93-.14,1.83.24,1.84,1.38,1.95,1.43.73,6.09,1.76,4.54,2.52,2.36,1,2.5.34-1-3.52.34-3.69,1.65-3.29L309.6,315l-6.81-1.53-3.05-1.18-2.63-1.94L295,307.17l-.92-3.52L293.6,300l-.85-3.63-2-4.49-1.41-2.33L288,288.13l-3.29-1.05L283,288.33l-1.73,5-1.92-3.11ZM194.6,385.75l-2.41-.21-1.78.55,1.62,1.52,2.69,1.88,2.4.71.75-2-1.09-1.56Zm73.59,9.77,2.66-2.93,1.56-.62,1.62.63,1.4,1.46,1.26,1.62,1.22,1.13,2.16,1.29,1.43.57,1.21-.75,1.51-2.66,1.28-4.48.42-5.31-1-27.38.3-2.89,1.25-5.58.24-2.75-.3-1.38-.56-1.36-.51-1.51-.12-1.82.43-1.94.72-1.36.85-1.23.87-1.57,1.34-3.17.37-2.18L289,327.1l-7-9.62-5.78-5.59-6.84-3-7.89,1.47-1.62,1.5L257.91,314,256,315.5l-1.55-.58-.27-3.11,2.11-2.61,2.49-2.56.84-3-.64-1.51-1-.76-1.26-.55-1.35-.93-1.58-1.55-1-1.14-.71-1.27-.75-1.92-.76-4.17-.4-5.28-.74-5.09-1.81-3.59-1.95-.66-7.12-1.07-2.7-.63-3.72-1.59-3.46-2-2.83-2.72L224,263.5l0-.68.29-.59.34-.46.15-.23.1.11,0-2.69-1.3-.31.12-2.25-.22-1.47.26-1.33,2.94-3,3.15-1.34,2-1.74-.57-4.17-5.7-6.6-5-.84L209,241.86l-7.46,1,11.26-4.3,1.82-2.57-1.07-3.26L210.4,231l-6.82-1.43-6-3.24-3.18-4.38-2.44-5.1-3.81-5.35-2.94-2.37-2.87-1.36-6.08-2.31-2.48-1.74-1.36-1.94-1-2.26-1.46-2.71L168,194.36l-2.82-2.76-3.16-1.93-2.87.1-1.39,1.8.16,2.26,1.5,4.59L152,193l-6.26-6.5-11.14-14.87-3.71-4.16-4.46-3.71-9.5-6.36-2.11-1.18-4.41-2.06-2.09-1.18-1.54-1.28-2.34-2.82-1.26-1.26-2-1.14-4.84-2-1.78-1.25-1.31-2.17-.19-1.92.08-2-.51-2.41-1.13-1.63L88,130.18l-1.42-1.51-3.53-6.07-1.6-2-3.28-3.3-2.74-2-3-1-25.18-.85L41,111.83,30.69,105.6l-5.8-2-5.42-.15-2,1.65-.62,3.05-1.22,4.07,5.65,9,6,7.69,15.81,16.44,3.05,3.91L48,150.83l2.2.94,4.74,1,2.23.91,3.65,3.15L69,169.28l1.58,1.54,3.63,2.68L75.58,175l1,2.2.42,2.34.24,2.42.51,2.4,2.29,3.74,3.39,2.25,8.2,3.69,8.37,6.81,5.36,8,3.67,9.25,4.85,15.72,1.64,4.1,2.58,3.39,8.73,6,2.85,3.39,5.5,8.32,8.18,9.71L157,296.82l2.34,8.64,2,4.33,3,4.26,6.77,7.59,6.38,8.62,3.65,3.46,8.09,6.66,3.24,3.61,5.52,8.06,3.18,3.76,8,6.57,17.25,11.41,7.87,6.45,15.39,17.54,4.21,3.14.8-1.45-.53-3.94.26-4.32,6,3.74,3.28,1.4,3.08.1Zm40.55-69.7,1.19.63,1.12-.43.88-1.68-1.15-.57-1-.15-1,.21-1.05.48Zm27.13-11.52-3.46.84-1.77,2.18L328.46,324l.65,1.85.48,1.83.24,1.85-.08,1.94,1.55-.4,1.82-.86,2.16-1.24,3.22,1.77.31.34,2.45-.4,2.1-1.12,1.58-2.17.87-3.55-.45-3.76-2-3-3.26-2Zm-9.75,9.21.73-1.47-.94-.31-.56.16-1,.87,1.22,1Zm-56.74,94-2.75,2.1,2.43.74,1-1.65Zm202.33,46.43,6,1.56,12.24,4.93,10.66,2.81,3.76,2.07,1.57.12.59-2-.8-1.39-3.56-4.55-1-2.27.19-3.09,1.54-6.27-.21-3-3.19-4.58-4.74-1.5-5.44.31-8.93,1.23-3.68.09-3.66-.27L468,447.1l-1.51-.43L465,446.1l-1.31-.78-1.78-1.75-.32-1.23v-1.29l-.83-1.89-4.61-6.6-.47-1.11-.61-2.77-.62-1-1.49-.63-5.41-.13-4.86-1.28-9.44-3.74-4.8-1.4-2.11.12-2,.7-2.15.48-2.42-.58-2.05-1.83-1.3-2.17-1.51-1.79-2.67-.71-3.84,1.83-1.91,4-1.7,4.39-3.2,2.91-2.07.26-20.32-2.86-18.22-.87-2.79-.61L356,422.22l-5.43-7.8-2.8-2.24-3.45-.94L336,410.19l-3.42-.77-3.3-1.11-3-1.51-.95-.84-1.64-2.07-1-.82-1.7-.6-3.72-.59-1.81-.72-3.27,4.21-6.26.12-12.76-2.76-2.78,0-2,.6L286.78,405l-1.58,3.12L284,413.9,282.74,416l-2.59-.14-1.23,3.2-2.25,3.49-2.31,1.41L273,420.87l-1,.48-.85.67-.73.83-.62,1L272,425.3l3.47.42,7.16-.13,5.08.63,4.83,1.23L302,431l-2,5.74,2.49,2.83,5.2,1.06,6.09.45,6.41,1.13,20.3,7.08,3.59.77,3.64.44,3.22-.17,2.55-.8,5.05-2,3.07-.43,6.15.29,12.64,2.16,6,1.61,19,8,6.63,1.92,41.59,4.16,5.52.1,5.88-.89ZM115.13,285l-4.25-10.22-1.74-2-3.63-.37-2.23,2.33-1,3.59.23,3.4,1.72,3.92,2.65,3.56,3.2,3.05,3.34,2.41,3.91-.64.62-2.52-1.22-3.35Zm13.72,17.57-2.41-1.49-1.18,3.31,1.58,1.89,1.94,1.24,4.34,2.24-1.69-3.44ZM142.12,319l-.65-2.14-1.86-2.13-2.08-.74-1.37,2,.85,2.77,1.81,2.39,2,.56Zm6.72,8.09-1.77-2.76-2.42-2.68-2.08-.84-.74,2.78.84,2.59,1.89,3.42,2.26,3.17,1.93,1.79-.69-1.86-.11-1.94.31-1.92ZM544.64,336l-1.88,5.81.07,6.37,1.59,5.13,3.74-3.36,1.32-1.86.65-2.3L549,339.17l-.24-3.54.16-3.1ZM534,464.75,530.65,461l-1.72-1.11-2.16-1.08-2.25-.82-2-.33-1.73.27-1.21.68-1.2.82-1.73.69-3.46-.09-4.06-.86-3.66-.44-2.25,1.18,1.49,3.33,2.44,1.72,6.27,2.24,2.8,1.7,2.66,2.44,1.33,2.87-1.19,3,2.44-.08,1.63-1.59,1.36-2.24,1.6-2.07,6.95-4.16Zm18.55-125.3.32-3.08-1.39,1.34-.69,1.52.09,1.62,1,1.64ZM359.86,289.09l.87,2.42,2.38-1.07.35-1-1.24-.55Zm19.42-15.32-1.49.25-1.22,1.1-.61,1.63-.22,1.93-.07,2,2.55.62,3-.84,2.24-1.91.32-2.65-1-1.1-1.67-.73ZM499,432.13l1,1.32.58.43.89.21.07-1.55-.46-.56h-.88Zm-41-32.64.85-1.48-.77-1.21-2.47,1.75Zm26.55,26.16-10.8.77-4.25-.05-4.11.3-3.58,1.45-2.66,3.36,7,4.58,9.78-1,17.61-5.74-3.46-2.93Zm46,2.35L529,426.44l-2.28-1-2.34-.1-1.76,1.25,0,1.95,2.6.3ZM813,93.4l-.17.74-.3.71-.43.67-.56.62-.14-.8.2-.73.52-.66Z" transform="translate(-12 -16.82)"/>
    </g>
    
    <a href="miangas-berita.php" target="_blank" alt="miangas">
        <g id="miangas">
        <path class="cls-5" d="M838.49,41.94c0,13.88-25.47,52.44-25.47,52.44s-25.48-38.56-25.48-52.44a25.48,25.48,0,0,1,51,0Z" transform="translate(-12 -16.82)"/>
        <ellipse class="cls-6 cc-point" cx="801.02" cy="25.36" rx="21.23" ry="21.12"/>
        </g> 
    </a>

    <a href="atambua-berita.php" target="_blank">
        <g id="atambua">
        <path class="cls-7" d="M787.54,443.53c0,11.27-20.71,42.6-20.71,42.6s-20.7-31.33-20.7-42.6a20.71,20.71,0,0,1,41.41,0Z" transform="translate(-12 -16.82)"/>
        <ellipse class="cls-6 cc-point" cx="754.83" cy="426.89" rx="17.25" ry="17.16"/>
        </g> 
    </a>

    <a href="karimunbesar-berita.php" target="_blank">
        <g id="karimunbesar">
        <path class="cls-5" d="M370.31,89.72c0,13.87-25.48,52.43-25.48,52.43s-25.48-38.56-25.48-52.43a25.48,25.48,0,0,1,51,0Z" transform="translate(-12 -16.82)"/>
        <ellipse class="cls-6 cc-point" cx="332.83" cy="73.13" rx="21.23" ry="21.12"/>
        </g> 
    </a>

    <a href="natuna-berita.php" target="_blank">
        <g id="natuna">
        <path class="cls-5" d="M247.69,166.16c0,13.87-25.48,52.43-25.48,52.43S196.73,180,196.73,166.16a25.48,25.48,0,0,1,51,0Z" transform="translate(-12 -16.82)"/>
        <ellipse class="cls-6 cc-point" cx="210.21" cy="149.57" rx="21.23" ry="21.12"/>
        </g>
    </a>

    <a href="sinabang-berita.php" target="_blank">
        <g id="sinabang">
        <path class="cls-7" d="M53.4,136.18c0,11.27-20.7,42.6-20.7,42.6S12,147.45,12,136.18a20.7,20.7,0,0,1,41.4,0Z" transform="translate(-12 -16.82)"/>
        <ellipse class="cls-6 cc-point" cx="20.7" cy="119.55" rx="17.25" ry="17.16"/>
        </g> 
    </a>

    <a href="skouw-berita.php" target="_blank">
        <g id="skouw">
        <path class="cls-7" d="M1188.84,297c0,11.27-20.7,42.6-20.7,42.6s-20.71-31.33-20.71-42.6a20.71,20.71,0,0,1,41.41,0Z" transform="translate(-12 -16.82)"/>
        <ellipse class="cls-6 cc-point" cx="1156.14" cy="280.39" rx="17.25" ry="17.16"/>
        </g> 
    </a>

    <a href="pulaurote-berita.php" target="_blank">
        <g id="pulaurote">
        <path class="cls-7" d="M736.58,488.11c0,11.28-20.71,42.61-20.71,42.61s-20.7-31.33-20.7-42.61a20.71,20.71,0,0,1,41.41,0Z" transform="translate(-12 -16.82)"/>
        <ellipse class="cls-6 cc-point" cx="703.87" cy="471.48" rx="17.25" ry="17.16"/>
        </g>
    </a>

    <a href="entikong-berita.php" target="_blank">
        <g id="entikong">
        <path class="cls-7" d="M414.9,182.36c0,11.27-20.71,42.6-20.71,42.6s-20.7-31.33-20.7-42.6a20.71,20.71,0,0,1,41.41,0Z" transform="translate(-12 -16.82)"/>
        <ellipse class="cls-6 cc-point" cx="382.19" cy="165.73" rx="17.25" ry="17.16"/>
        </g> 
    </a>

    <a href="merauke-berita.php" target="_blank">
        <g id="merauke">
        <path class="cls-7" d="M1184.06,426c0,11.27-20.7,42.6-20.7,42.6s-20.7-31.33-20.7-42.6a20.7,20.7,0,0,1,41.4,0Z" transform="translate(-12 -16.82)"/>
        <ellipse class="cls-6 cc-point" cx="1151.36" cy="409.38" rx="17.25" ry="17.16"/>
        </g> 
    </a>

    <a href="nunukan-berita.php" target="_blank">
        <g id="nunukan">
        <path class="cls-7" d="M607.59,99.55c0,11.27-20.71,42.6-20.71,42.6s-20.7-31.33-20.7-42.6a20.71,20.71,0,0,1,41.41,0Z" transform="translate(-12 -16.82)"/>
        <ellipse class="cls-6 cc-point" cx="574.88" cy="82.92" rx="17.25" ry="17.16"/>
        </g> 
    </a>

    <text class="cls-8" transform="translate(7.56 514.32)">© <tspan class="cls-9" x="10.67" y="0">C</tspan><tspan x="17.38" y="0">O</tspan><tspan class="cls-10" x="25.64" y="0">P</tspan><tspan class="cls-11" x="31.92" y="0">Y</tspan><tspan x="38.33" y="0">RIGHT 2019, detik</tspan><tspan class="cls-12" x="126.57" y="0">c</tspan><tspan x="131.88" y="0">om</tspan></text>

  </g>
</svg>



  <!--<div id="popover-content" class="hide" style="border:1px red solid;">
      <form class="form-inline" role="form">
        <div class="form-group"> 
          <input class="headerSearch search-query" id="str" name="str" type="text" placeholder="Search..." />
          <span class="glyphicon glyphicon-search" style="margin:3px 8px 0 -20px;"></span>
          <input class="btn btn-primary btn-xs" id="phSearchButton" type="submit" value="Search" /> 
          <input class="btn btn-primary btn-xs" id="searchButton" type="submit" value="Dictionary" />
        </div>
      </form>
    </div>  -->

</body>

</html>