/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';
const { useSelect, useDispatch } = window.wp.data

const { 
	BaseControl,
	Button, 
	Spinner
} = window.wp.components
const { MediaUpload, MediaUploadCheck } = window.wp.blockEditor
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import './editor.scss';
import { useState } from '@wordpress/element';
import { TextControl, TextareaControl, PanelBody, SelectControl  } from '@wordpress/components';

export default function Edit(props) {
	const {title, block_layout, description, btn_text, btn_link, block_image} = props.attributes;
	const { attributes, setAttributes } = props;
	const { imageId, image } = useSelect( select => {
		const id = select( 'core/editor' ).getEditedPostAttribute( 'meta' )[ props.metaKey ];
		return {
			image: select( 'core' ).getMedia( id ),
		};
		// upload meta data
	});
	const { editPost } = useDispatch( 'core/editor', [ imageId ] );

	const updateTitle = function(title) {
		setAttributes({ title: title });
	}
	const updateDescription = function(description) {
		setAttributes({ description: description });
	}
	const updateBtn = function(updateBtn) {
		setAttributes({ btn_text: updateBtn });
	}
	const updateBtnLink = function(btn_link) {
		setAttributes({ btn_link: btn_link });
	}
	const setLayoutFunc = function(newLayout) {
		setAttributes({block_layout: newLayout});
	}
	return (
		<div  { ...useBlockProps() }>
			<InspectorControls key="setting">
				<div id="gutenpride-controls">
					<PanelBody>
						<fieldset>
							<legend className="blocks-base-control__label">
								{ __( 'Service Controls', 'getweb-gutenberg-block' ) }<br/>
								<SelectControl
									label="Layout"
									value={ block_layout }
									options={ [
										{ label: 'Layout 01', value: 'layout-1' },
										{ label: 'Layout 02', value: 'layout-2' },
										{ label: 'Layout 03', value: 'layout-3' }
									] }
									onChange={ ( newLayout ) => setLayoutFunc( newLayout ) }
									__nextHasNoMarginBottom
								/>
								<p>Title</p>
								<TextControl
									value={title}
									onChange={title => updateTitle(title)}
								/>
								<p>Description</p>
								<TextareaControl
									value={ description }
									onChange={description => updateDescription(description)}
								/>
								<p>Button Text</p>
								<TextControl
									value={btn_text}
									onChange={btn_text => updateBtn(btn_text)}
								/>
								<p>Button Link</p>
								<TextControl
									value={btn_link}
									onChange={btn_link => updateBtnLink(btn_link)}
								/>
								<p>Upload image</p>
							</legend>
						</fieldset>
					</PanelBody>
				</div>
				</InspectorControls>
			<div>
				{
					block_layout=='layout-1' &&
					<div class="details-card-item">
						<BaseControl label={ props.label }>
							<MediaUploadCheck>
								<MediaUpload
									onSelect={ ( media ) => {
										setAttributes({
											block_image: media.url
										});
									} }
									allowedTypes={ [ 'image' ] }
									render={ ( { open } ) => {
										return(
											<div>
												{ ! block_image && <Button variant="secondary" onClick={ open }>Upload image</Button> }
												{ !! imageId && ! image && <Spinner /> }
												{ !! block_image &&
														<img width="195" height="175" src={block_image} class="img-fluid" alt="" decoding="async" />
												}
											</div>
										)
									} }
								/>
							</MediaUploadCheck>
							{ !! imageId &&
								<Button onClick={ () => editPost( { meta: { [props.metaKey]: 0 } } ) } isLink isDestructive>
									Remove image
								</Button>
							}
						</BaseControl>
						<h4 class="my-3">
							<TextControl
								value={title}
								onChange={title => updateTitle(title)}
							/></h4>
							<p>
								<TextareaControl
									value={ description }
									onChange={description => updateDescription(description)}
								/></p>
						<a href={btn_link && btn_link} class="details-link d-block text-decoration-none">
						<TextControl
								value={btn_text}
								onChange={btn_text => updateBtn(btn_text)}
							/><span>
							<svg class="ms-2" width="21" height="21"
									viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M10.5 16.2671L9.4375 15.2046L13.625 11.0171H4.5V9.51709H13.625L9.4375 5.32959L10.5 4.26709L16.5 10.2671L10.5 16.2671Z"
										fill="white" />
								</svg>
							</span></a>
					</div>
				}
				{/* /. layout 1 */}
				{
					block_layout=='layout-2' &&
					<a href={btn_link && btn_link} class="details-card-item d-block text-decoration-none">
						<div class="d-flex align-items-start gap-2 justify-content-between">
							<BaseControl label={ props.label }>
								<MediaUploadCheck>
									<MediaUpload
										onSelect={ ( media ) => {
											setAttributes({
												block_image: media.url
											});
										} }
										allowedTypes={ [ 'image' ] }
										render={ ( { open } ) => {
											return(
												<div>
													{ ! block_image && <Button variant="secondary" onClick={ open }>Upload image</Button> }
													{ !! imageId && ! image && <Spinner /> }
													{ !! block_image &&
															<img width="195" height="175" src={block_image} class="img-fluid" alt="" decoding="async" />
													}
												</div>
											)
										} }
									/>
								</MediaUploadCheck>
								{ !! imageId &&
									<Button onClick={ () => editPost( { meta: { [props.metaKey]: 0 } } ) } isLink isDestructive>
										Remove image
									</Button>
								}
							</BaseControl>
							<img src="http://uiexpertz.com/wp-content/uploads/2023/08/arrow-outward.svg"
							alt="banner img" class="img-fluid" />
						</div>
						<h4 class="my-3">
						<TextControl
							value={title}
							onChange={title => updateTitle(title)}
						/></h4>
						<p>
						<TextareaControl
							value={ description }
							onChange={description => updateDescription(description)}
						/></p>
						
					</a>
				}
				{/* layout 2 */}
				{
					block_layout == 'layout-3' &&
					<a href={btn_link && btn_link} class="details-card-item  d-block text-decoration-none">
						<h4 class="my-3">
						<TextControl
							value={title}
							onChange={title => updateTitle(title)}
						/></h4>
						<p>
						<TextareaControl
							value={ description }
							onChange={description => updateDescription(description)}
						/></p>
						
					</a>
				}
			</div>
		</div>
	);
}
