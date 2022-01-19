wp.domReady( () => {
	wp.blocks.unregisterBlockType( 'core/media-text' );
	wp.blocks.unregisterBlockType( 'core/search' );
} );