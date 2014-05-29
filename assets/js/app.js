$( 'iframe' ).wrap( '<div class="wrapper wrapper-video"></div>' );

$(function() {
  blockquotes = document.getElementsByTagName('blockquote');
  if (blockquotes) {
    for (var i = 0; i < blockquotes.length; i++){
      var blockquote = blockquotes[i];
      var currentId = 'block-' + i;
      blockquote.id = currentId;
      paragraphs = blockquote.getElementsByTagName('p');
      if ( 1 < paragraphs.length ){
        var citation = document.getElementById(currentId);
        var lastParagraph = citation.querySelector('p:last-child').innerText;
        var comma = lastParagraph.indexOf(','); // Contains 24 //
        var speaker = lastParagraph.substring(0, comma);
        var title = lastParagraph.substring(comma, citation.length);
        var res = lastParagraph.replace(lastParagraph, '<strong>' + speaker + '</strong>' + title);
        $( 'p:last-child' ).addClass( "last" );
        $('p:last-child').html(res);
      }
    }
  }

});
