import { useBlockProps } from '@wordpress/block-editor';

export default function Save() {
	return (
		<div {...useBlockProps.save()}>
			<h3>Like this post? Join my mailing list!</h3>
			<form>
				<input type="email" placeholder="Enter your email address" />
				<button>Subscribe</button>
			</form>
		</div>
	);
}
