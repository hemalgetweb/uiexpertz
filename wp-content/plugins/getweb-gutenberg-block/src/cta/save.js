import { useBlockProps } from '@wordpress/block-editor';

export default function save(props) {
    // Destructure attributes from props
    const { cta_title, cta_content, cta_btn_1_text, cta_btn_1_link, cta_btn_2_text, cta_btn_2_link } = props.attributes;

    // Render the saved content
    return (
        <div { ...useBlockProps.save() }>
            <div class="wb-blog-details-box">
                { cta_title && <h3>{ cta_title }</h3> }
                { cta_content && <p>{ cta_content }</p> }
                <div class="uiexperts-btn-item d-flex flex-wrap mt-4 align-items-start gap-4">
                    { cta_btn_1_text && 
                        <a class="text-decoration-none position-relative bg-btn banner-btn border-0 bg-clr-darkBlue text-white fs-14 fw-extraBold d-flex gap-2 align-items-center" href={ cta_btn_1_link && cta_btn_1_link } target="_blank">
                            { cta_btn_1_text }
                            <svg class="btn-icon position-absolute" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12L4.9375 10.9375L9.125 6.75H0V5.25H9.125L4.9375 1.0625L6 0L12 6L6 12Z" fill="white"></path>
                            </svg>
                        </a>
                    }
                    { cta_btn_2_text && 
                        <a class="text-decoration-none position-relative bg-btn banner-btn border-0 bg-transparent text-clr-darkBlue fs-14 fw-extraBold d-flex gap-2 align-items-center" href={ cta_btn_2_link && cta_btn_2_link } target="_blank">
                            { cta_btn_2_text }
                            <svg class="btn-icon position-absolute" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 16.2671L8.9375 15.2046L13.125 11.0171H4V9.51709H13.125L8.9375 5.32959L10 4.26709L16 10.2671L10 16.2671Z" fill="#5648FF" />
                            </svg>
                        </a>
                    }
                </div>
            </div>
        </div>
    );
}
