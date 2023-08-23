/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';
import { TextControl, TextareaControl  } from '@wordpress/components';
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
	const {title, block_layout, description, btn_text, btn_link, block_image} = props.attributes;
	console.log(block_layout);
	return (
		<div { ...useBlockProps.save() }>
			{
				block_layout == 'layout-1' &&
				<div class="details-card-item">
				{block_image && <img src={block_image}
					alt="banner img" class="img-fluid" />}
				{title && <h4 class="my-3">{title}</h4>}
				{description && <p>{description}</p>}
				{btn_link && <a href={btn_link && btn_link} class="details-link d-block text-decoration-none">{btn_text && btn_text} <span>
					<svg class="ms-2" width="21" height="21"
							viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M10.5 16.2671L9.4375 15.2046L13.625 11.0171H4.5V9.51709H13.625L9.4375 5.32959L10.5 4.26709L16.5 10.2671L10.5 16.2671Z"
								fill="white" />
						</svg>
					</span></a>}
			</div>
			}
			{
				block_layout == 'layout-2' &&
				<a href={btn_link && btn_link} class="details-card-item d-block text-decoration-none">
					<div class="d-flex align-items-start gap-2 justify-content-between">
						<img src={block_image}
							alt="banner img" class="img-fluid" />
						<img src="http://uiexpertz.com/wp-content/uploads/2023/08/arrow-outward.svg"
							alt="banner img" class="img-fluid" />
					</div>
					{title && <h4 class="my-3">{title}</h4>}
					{description && <p>{description}</p>}
					
				</a>
			}
			{
				block_layout == 'layout-3' &&
				<a href={btn_link && btn_link} class="details-card-item  d-block text-decoration-none">
					{title && <h4 class="my-3">
					{title}</h4>}
					{description && <p>{description}</p>}
					
				</a>
			}
		</div>
	);
}
