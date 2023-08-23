import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { TextControl, TextareaControl  } from '@wordpress/components';
import './editor.scss';

export default function Edit(props) {
  const {quote_title, quote_content} = props.attributes;
  const { attributes, setAttributes } = props;
  const updateQuoteTitle = function(newtitle) {
    setAttributes({quote_title: newtitle});
  }
  const updateQuoteContent = function(newContent) {
    setAttributes({quote_content: newContent});
  }
  return (
    <div {...useBlockProps()}>
      <div class="wb-blog-details-quote">
      <h3><TextControl
        value={quote_title}
        onChange={(newTitle) => {updateQuoteTitle(newTitle)}}
        /></h3>
			<div class="quote-line"></div>
				<p>
          <TextareaControl
          value={quote_content}
          onChange={(newContent) => {updateQuoteContent(newContent)}}
          />
        </p>
			</div>
    </div>
  );
}