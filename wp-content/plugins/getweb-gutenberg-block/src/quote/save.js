/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save(props) {
	const {quote_title, quote_content} = props.attributes;
	const { attributes, setAttributes } = props;
	return (
		<div { ...useBlockProps.save() }>
			<div class="wb-blog-details-quote">
				{quote_title && <h3>{quote_title}</h3>}
				<div class="quote-line"></div>
				{quote_content &&
					<p>{quote_content}</p>
				}
			</div>
		</div>
	);
}
