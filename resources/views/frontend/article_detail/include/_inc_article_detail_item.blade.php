@if( $article )
	<div class="about-page-cntent">
		
			<blockquote class="text-left">
			<p>{!! $article->a_description !!}</p>
			</blockquote>
			<p>{!! $article->a_content !!}</p>
	</div>
@endif
