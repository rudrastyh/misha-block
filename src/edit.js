import { useBlockProps } from '@wordpress/block-editor';

export default function Edit() {
	return(
		<div {...useBlockProps()}>
			<h3>Like this post? Join my mailing list!</h3>
			<p>
				<span>Email address</span>
				<span>Subscribe</span>
			</p>
		</div>
	)
}
