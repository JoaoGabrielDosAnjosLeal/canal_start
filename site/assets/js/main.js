//******PLAYER******
jwplayer("MediaPlayerMiniPlayer").setup({
sources: [ {file: 'https://stmv1.srvif.com/canalstart/canalstart/playlist.m3u8'} ],rtmp: { bufferlength: 120, },'autostart': 'true','image': '','playbackRateControls': 'false','aspectratio': '16:9','width': '100%','height': '100%','logo': { 'file': 'undefined', 'position': 'undefined', 'margin': 20 }, 'fallback': false,'androidhls': true,'primary': 'html5','preload': 'metadata','mute': 'false', 'stretching': 'uniform','playbackRateControls': 'false','liveSyncDuration': ''
});

//******SPEED NEWS******
$('.speedNews-article').children('button').click(function(){
    $(this).parent().children('p, span').fadeToggle();
});