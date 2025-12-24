<?php

namespace App\Filament\Resources\PageContents\Schemas;

use App\Models\PageContent;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PageContentForm
{
    public static function configure(Schema $schema, ?PageContent $record): Schema
    {
        if (!$record) {
            return $schema->components([]);
        }

        $sectionSlug = $record->section_slug;
        
        return $schema->components([
            Section::make($record->section_title)
                ->description("Page: " . ucfirst($record->page_slug))
                ->schema(self::getFieldsForSection($sectionSlug)),
                
            Section::make('Settings')
                ->schema([
                    Toggle::make('is_active')
                        ->label('Section Active')
                        ->helperText('Enable or disable this section on the website'),
                ])
                ->collapsed(),
        ]);
    }

    private static function getFieldsForSection(string $sectionSlug): array
    {
        return match ($sectionSlug) {
            'hero' => self::heroFields(),
            'live_hero' => self::liveHeroFields(),
            'scrolling_ticker' => self::scrollingTickerFields(),
            'about' => self::aboutFields(),
            'about_us' => self::aboutUsFields(),
            'vision_mission' => self::visionMissionFields(),
            'about_counter' => self::aboutCounterFields(),
            'what_we_do' => self::whatWeDoFields(),
            'our_team' => self::ourTeamFields(),
            'pastors_message' => self::pastorsMessageFields(),
            'core_values' => self::coreValuesFields(),
            'join_worship' => self::joinWorshipFields(),
            'our_counter' => self::counterFields(),
            'our_mission' => self::missionFields(),
            'our_services' => self::servicesFields(),
            'service_ticker' => self::serviceTickerFields(),
            'our_ministries' => self::ministriesFields(),
            'our_sermons' => self::sermonsFields(),
            'verse_church' => self::verseChurchFields(),
            'cta_box' => self::ctaBoxFields(),
            'our_event' => self::ourEventFields(),
            'donate_now' => self::donateNowFields(),
            'our_blog' => self::ourBlogFields(),
            'subscribe_newsletter' => self::subscribeNewsletterFields(),
            // Events page
            'events_page_header' => self::simplePageHeaderFields(),
            'featured_event' => self::featuredEventFields(),
            'event_faqs' => self::eventFaqsFields(),
            'events_sidebar' => self::eventsSidebarFields(),
            // Branches page
            'branches_page_header' => self::simplePageHeaderFields(),
            // Partnership page
            'partnership_page_header' => self::simplePageHeaderFields(),
            'why_partner' => self::whyPartnerFields(),
            'impact_areas' => self::impactAreasFields(),
            'seed_action' => self::seedActionFields(),
            'giving_channels' => self::givingChannelsFields(),
            'bank_transfers' => self::bankTransfersFields(),
            'mobile_money' => self::mobileMoneyFields(),
            'partnership_faqs' => self::partnershipFaqsFields(),
            default => self::defaultFields(),
        };
    }

    private static function heroFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Main Title'),
            Textarea::make('content.description')->label('Description')->rows(3),
            TextInput::make('content.video_url')->label('Background Video URL')->url(),
            FileUpload::make('content.background_image')->label('Fallback Background Image')->image()->disk('public')->directory('page-content'),
            Section::make('Buttons')->schema([
                TextInput::make('content.button_1_text')->label('Primary Button Text'),
                TextInput::make('content.button_2_text')->label('Secondary Button Text'),
            ])->columns(2),
        ];
    }

    private static function liveHeroFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Main Title'),
            Textarea::make('content.description')->label('Description')->rows(3),
            TextInput::make('content.video_url')->label('Video URL (MP4)')->helperText('The video that plays in the background. Users can control play/pause/volume.'),
            FileUpload::make('content.background_image')->label('Fallback Background Image')->image()->disk('public')->directory('page-content'),
        ];
    }

    private static function aboutUsFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Textarea::make('content.description_1')->label('Description Paragraph 1')->rows(3),
            Textarea::make('content.description_2')->label('Description Paragraph 2')->rows(3),
            Section::make('Images')->schema([
                FileUpload::make('content.image_1')->label('Image 1')->image()->disk('public')->directory('page-content'),
                FileUpload::make('content.image_2')->label('Image 2')->image()->disk('public')->directory('page-content'),
            ])->columns(2),
            Section::make('Feature List')->schema([
                TextInput::make('content.feature_1')->label('Feature 1'),
                TextInput::make('content.feature_2')->label('Feature 2'),
                TextInput::make('content.feature_3')->label('Feature 3'),
                TextInput::make('content.feature_4')->label('Feature 4'),
            ])->columns(2),
        ];
    }

    private static function visionMissionFields(): array
    {
        return [
            TextInput::make('content.main_subtitle')->label('Section Subtitle'),
            TextInput::make('content.main_title')->label('Section Title'),
            Section::make('Our Vision Tab')->schema([
                TextInput::make('content.vision_subtitle')->label('Tab Title'),
                TextInput::make('content.vision_title')->label('Vision Title'),
                TextInput::make('content.vision_headline')->label('Vision Headline'),
                Textarea::make('content.vision_description')->label('Vision Description')->rows(3),
                FileUpload::make('content.vision_image')->label('Vision Image')->image()->disk('public')->directory('page-content'),
            ]),
            Section::make('Our Mission Tab')->schema([
                TextInput::make('content.mission_subtitle')->label('Tab Title'),
                TextInput::make('content.mission_title')->label('Mission Title'),
                TextInput::make('content.mission_headline')->label('Mission Headline'),
                Textarea::make('content.mission_description')->label('Mission Description')->rows(3),
                FileUpload::make('content.mission_image')->label('Mission Image')->image()->disk('public')->directory('page-content'),
            ]),
            Section::make('Our Approach Tab')->schema([
                TextInput::make('content.approach_subtitle')->label('Tab Title'),
                TextInput::make('content.approach_title')->label('Approach Title'),
                TextInput::make('content.approach_headline')->label('Approach Headline'),
                Textarea::make('content.approach_description')->label('Approach Description')->rows(3),
                FileUpload::make('content.approach_image')->label('Approach Image')->image()->disk('public')->directory('page-content'),
            ]),
        ];
    }

    private static function aboutCounterFields(): array
    {
        return [
            Section::make('Counter 1')->schema([
                TextInput::make('content.counter_1_number')->label('Number'),
                TextInput::make('content.counter_1_title')->label('Title'),
                TextInput::make('content.counter_1_description')->label('Description'),
            ])->columns(3),
            Section::make('Counter 2')->schema([
                TextInput::make('content.counter_2_number')->label('Number'),
                TextInput::make('content.counter_2_title')->label('Title'),
                TextInput::make('content.counter_2_description')->label('Description'),
            ])->columns(3),
            Section::make('Counter 3')->schema([
                TextInput::make('content.counter_3_number')->label('Number'),
                TextInput::make('content.counter_3_title')->label('Title'),
                TextInput::make('content.counter_3_description')->label('Description'),
            ])->columns(3),
            Section::make('Counter 4')->schema([
                TextInput::make('content.counter_4_number')->label('Number'),
                TextInput::make('content.counter_4_title')->label('Title'),
                TextInput::make('content.counter_4_description')->label('Description'),
            ])->columns(3),
        ];
    }

    private static function whatWeDoFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Section::make('Service 1')->schema([
                TextInput::make('content.service_1_title')->label('Title'),
                Textarea::make('content.service_1_description')->label('Description')->rows(2),
            ]),
            Section::make('Service 2')->schema([
                TextInput::make('content.service_2_title')->label('Title'),
                Textarea::make('content.service_2_description')->label('Description')->rows(2),
            ]),
            Section::make('Service 3')->schema([
                TextInput::make('content.service_3_title')->label('Title'),
                Textarea::make('content.service_3_description')->label('Description')->rows(2),
            ]),
        ];
    }

    private static function ourTeamFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Section::make('Team Member 1')->schema([
                TextInput::make('content.member_1_name')->label('Name'),
                TextInput::make('content.member_1_role')->label('Role'),
                FileUpload::make('content.member_1_image')->label('Photo')->image()->disk('public')->directory('page-content'),
                TextInput::make('content.member_1_facebook')->label('Facebook URL'),
                TextInput::make('content.member_1_linkedin')->label('LinkedIn URL'),
                TextInput::make('content.member_1_instagram')->label('Instagram URL'),
                TextInput::make('content.member_1_twitter')->label('Twitter URL'),
            ])->columns(2),
            Section::make('Team Member 2')->schema([
                TextInput::make('content.member_2_name')->label('Name'),
                TextInput::make('content.member_2_role')->label('Role'),
                FileUpload::make('content.member_2_image')->label('Photo')->image()->disk('public')->directory('page-content'),
                TextInput::make('content.member_2_facebook')->label('Facebook URL'),
                TextInput::make('content.member_2_linkedin')->label('LinkedIn URL'),
                TextInput::make('content.member_2_instagram')->label('Instagram URL'),
                TextInput::make('content.member_2_twitter')->label('Twitter URL'),
            ])->columns(2),
            Section::make('Team Member 3')->schema([
                TextInput::make('content.member_3_name')->label('Name'),
                TextInput::make('content.member_3_role')->label('Role'),
                FileUpload::make('content.member_3_image')->label('Photo')->image()->disk('public')->directory('page-content'),
                TextInput::make('content.member_3_facebook')->label('Facebook URL'),
                TextInput::make('content.member_3_linkedin')->label('LinkedIn URL'),
                TextInput::make('content.member_3_instagram')->label('Instagram URL'),
                TextInput::make('content.member_3_twitter')->label('Twitter URL'),
            ])->columns(2),
            Section::make('Team Member 4')->schema([
                TextInput::make('content.member_4_name')->label('Name'),
                TextInput::make('content.member_4_role')->label('Role'),
                FileUpload::make('content.member_4_image')->label('Photo')->image()->disk('public')->directory('page-content'),
                TextInput::make('content.member_4_facebook')->label('Facebook URL'),
                TextInput::make('content.member_4_linkedin')->label('LinkedIn URL'),
                TextInput::make('content.member_4_instagram')->label('Instagram URL'),
                TextInput::make('content.member_4_twitter')->label('Twitter URL'),
            ])->columns(2),
        ];
    }

    private static function pastorsMessageFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            TextInput::make('content.headline')->label('Headline'),
            Textarea::make('content.description')->label('Description')->rows(3),
            FileUpload::make('content.pastor_image')->label('Pastor Image')->image()->disk('public')->directory('page-content'),
            FileUpload::make('content.signature_image')->label('Signature Image')->image()->disk('public')->directory('page-content'),
            TextInput::make('content.signature_title')->label('Signature Title (e.g., "Senior Pastor")'),
        ];
    }

    private static function coreValuesFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Section::make('FAQ 1')->schema([
                TextInput::make('content.faq_1_question')->label('Question'),
                Textarea::make('content.faq_1_answer')->label('Answer')->rows(2),
            ]),
            Section::make('FAQ 2')->schema([
                TextInput::make('content.faq_2_question')->label('Question'),
                Textarea::make('content.faq_2_answer')->label('Answer')->rows(2),
            ]),
            Section::make('FAQ 3')->schema([
                TextInput::make('content.faq_3_question')->label('Question'),
                Textarea::make('content.faq_3_answer')->label('Answer')->rows(2),
            ]),
            Section::make('FAQ 4')->schema([
                TextInput::make('content.faq_4_question')->label('Question'),
                Textarea::make('content.faq_4_answer')->label('Answer')->rows(2),
            ]),
            Section::make('FAQ 5')->schema([
                TextInput::make('content.faq_5_question')->label('Question'),
                Textarea::make('content.faq_5_answer')->label('Answer')->rows(2),
            ]),
            Section::make('Slider Images')->schema([
                FileUpload::make('content.slider_images')->label('Slider Images')->image()->multiple()->disk('public')->directory('page-content'),
            ]),
        ];
    }

    private static function scrollingTickerFields(): array
    {
        return [
            TextInput::make('content.ticker_text_1')->label('Ticker Text 1')->required(),
            TextInput::make('content.ticker_text_2')->label('Ticker Text 2'),
            TextInput::make('content.ticker_text_3')->label('Ticker Text 3'),
            TextInput::make('content.ticker_text_4')->label('Ticker Text 4'),
        ];
    }

    private static function aboutFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Textarea::make('content.description_1')->label('Description Paragraph 1')->rows(3),
            Textarea::make('content.description_2')->label('Description Paragraph 2')->rows(3),
            Section::make('Feature List')->schema([
                TextInput::make('content.feature_1')->label('Feature 1'),
                TextInput::make('content.feature_2')->label('Feature 2'),
                TextInput::make('content.feature_3')->label('Feature 3'),
                TextInput::make('content.feature_4')->label('Feature 4'),
            ])->columns(2),
        ];
    }

    private static function joinWorshipFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Section::make('Featured Card')->schema([
                TextInput::make('content.featured_title')->label('Title'),
                TextInput::make('content.featured_description')->label('Description'),
            ]),
            Section::make('Card 1')->schema([
                TextInput::make('content.card_1_title')->label('Title'),
                TextInput::make('content.card_1_description')->label('Description'),
            ])->columns(2),
            Section::make('Card 2')->schema([
                TextInput::make('content.card_2_title')->label('Title'),
                TextInput::make('content.card_2_description')->label('Description'),
            ])->columns(2),
            Section::make('Card 3')->schema([
                TextInput::make('content.card_3_title')->label('Title'),
                TextInput::make('content.card_3_description')->label('Description'),
            ])->columns(2),
        ];
    }

    private static function counterFields(): array
    {
        return [
            Section::make('Counter 1')->schema([
                TextInput::make('content.counter_1_number')->label('Number'),
                TextInput::make('content.counter_1_title')->label('Title'),
                TextInput::make('content.counter_1_description')->label('Description'),
            ])->columns(3),
            Section::make('Counter 2')->schema([
                TextInput::make('content.counter_2_number')->label('Number'),
                TextInput::make('content.counter_2_title')->label('Title'),
                TextInput::make('content.counter_2_description')->label('Description'),
            ])->columns(3),
            Section::make('Counter 3')->schema([
                TextInput::make('content.counter_3_number')->label('Number'),
                TextInput::make('content.counter_3_title')->label('Title'),
                TextInput::make('content.counter_3_description')->label('Description'),
            ])->columns(3),
            Section::make('Counter 4')->schema([
                TextInput::make('content.counter_4_number')->label('Number'),
                TextInput::make('content.counter_4_title')->label('Title'),
                TextInput::make('content.counter_4_description')->label('Description'),
            ])->columns(3),
        ];
    }

    private static function missionFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            TextInput::make('content.headline')->label('Headline'),
            Textarea::make('content.description')->label('Description')->rows(4),
        ];
    }

    private static function servicesFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Section::make('Service 1')->schema([
                TextInput::make('content.service_1_title')->label('Title'),
                Textarea::make('content.service_1_description')->label('Description')->rows(2),
            ]),
            Section::make('Service 2')->schema([
                TextInput::make('content.service_2_title')->label('Title'),
                Textarea::make('content.service_2_description')->label('Description')->rows(2),
            ]),
            Section::make('Service 3')->schema([
                TextInput::make('content.service_3_title')->label('Title'),
                Textarea::make('content.service_3_description')->label('Description')->rows(2),
            ]),
            Section::make('Service 4')->schema([
                TextInput::make('content.service_4_title')->label('Title'),
                Textarea::make('content.service_4_description')->label('Description')->rows(2),
            ]),
        ];
    }

    private static function serviceTickerFields(): array
    {
        return [
            TextInput::make('content.ticker_text_1')->label('Ticker Text 1')->required(),
            TextInput::make('content.ticker_text_2')->label('Ticker Text 2'),
            TextInput::make('content.ticker_text_3')->label('Ticker Text 3'),
            TextInput::make('content.ticker_text_4')->label('Ticker Text 4'),
            TextInput::make('content.ticker_text_5')->label('Ticker Text 5'),
        ];
    }

    private static function ministriesFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Textarea::make('content.footer_text')->label('Footer Text')->rows(2),
        ];
    }

    private static function sermonsFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
        ];
    }

    private static function verseChurchFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Textarea::make('content.description')->label('Description')->rows(3),
            TextInput::make('content.button_text')->label('Button Text'),
        ];
    }

    private static function ctaBoxFields(): array
    {
        return [
            TextInput::make('content.title')->label('Title/Message'),
            TextInput::make('content.button_text')->label('Button Text'),
        ];
    }

    private static function ourEventFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Event Title'),
            TextInput::make('content.date_time')->label('Date & Time'),
            TextInput::make('content.location')->label('Location'),
            Textarea::make('content.description')->label('Description')->rows(3),
            TextInput::make('content.button_text')->label('Button Text'),
        ];
    }

    private static function donateNowFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Textarea::make('content.description')->label('Description')->rows(2),
            TextInput::make('content.video_url')->label('Video URL')->url(),
            TextInput::make('content.button_text')->label('Button Text'),
        ];
    }

    private static function ourBlogFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
        ];
    }

    private static function subscribeNewsletterFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Textarea::make('content.description')->label('Description')->rows(2),
            TextInput::make('content.button_text')->label('Button Text'),
        ];
    }

    private static function simplePageHeaderFields(): array
    {
        return [
            TextInput::make('content.title')->label('Page Title'),
        ];
    }

    private static function whyPartnerFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title (use <span> for highlight)'),
            Textarea::make('content.description')->label('Main Description')->rows(4),
            FileUpload::make('content.main_image')->label('Main Image')->image()->disk('public')->directory('page-content'),
        ];
    }

    private static function impactAreasFields(): array
    {
        return [
            Section::make('Area 1 - Global Reach')->schema([
                TextInput::make('content.area_1_title')->label('Title'),
                TextInput::make('content.area_1_description')->label('Description'),
            ]),
            Section::make('Area 2 - Charity')->schema([
                TextInput::make('content.area_2_title')->label('Title'),
                TextInput::make('content.area_2_description')->label('Description'),
            ]),
            Section::make('Area 3 - Expansion')->schema([
                TextInput::make('content.area_3_title')->label('Title'),
                TextInput::make('content.area_3_description')->label('Description'),
            ]),
        ];
    }

    private static function seedActionFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Section::make('Gallery Images')->schema([
                FileUpload::make('content.gallery_image_1')->label('Image 1')->image()->disk('public')->directory('page-content'),
                TextInput::make('content.gallery_caption_1')->label('Caption 1'),
                FileUpload::make('content.gallery_image_2')->label('Image 2')->image()->disk('public')->directory('page-content'),
                TextInput::make('content.gallery_caption_2')->label('Caption 2'),
                FileUpload::make('content.gallery_image_3')->label('Image 3')->image()->disk('public')->directory('page-content'),
                TextInput::make('content.gallery_caption_3')->label('Caption 3'),
                FileUpload::make('content.gallery_image_4')->label('Image 4')->image()->disk('public')->directory('page-content'),
                TextInput::make('content.gallery_caption_4')->label('Caption 4'),
            ]),
        ];
    }

    private static function givingChannelsFields(): array
    {
        return [
            TextInput::make('content.title')->label('Section Title'),
            TextInput::make('content.description')->label('Section Description'),
        ];
    }

    private static function bankTransfersFields(): array
    {
        return [
            TextInput::make('content.title')->label('Section Title'),
            TextInput::make('content.subtitle')->label('Section Subtitle'),
            Section::make('UK International Account')->schema([
                TextInput::make('content.uk_title')->label('Bank Title'),
                TextInput::make('content.uk_note')->label('Note'),
                TextInput::make('content.uk_account_name')->label('Account Name'),
                TextInput::make('content.uk_iban')->label('IBAN'),
                TextInput::make('content.uk_swift')->label('BIC/SWIFT'),
                TextInput::make('content.uk_account_number')->label('Account Number'),
                TextInput::make('content.uk_sort_code')->label('Sort Code'),
            ]),
            Section::make('Ecobank Cameroon')->schema([
                TextInput::make('content.ecobank_cm_title')->label('Bank Title'),
                TextInput::make('content.ecobank_cm_name')->label('Account Name'),
                TextInput::make('content.ecobank_cm_number')->label('Account Number'),
            ]),
            Section::make('Ecobank Nigeria')->schema([
                TextInput::make('content.ecobank_ng_title')->label('Bank Title'),
                TextInput::make('content.ecobank_ng_name')->label('Account Name'),
                TextInput::make('content.ecobank_ng_number')->label('Account Number'),
            ]),
            Section::make('BICEC Bank Cameroon')->schema([
                TextInput::make('content.bicec_title')->label('Bank Title'),
                TextInput::make('content.bicec_name')->label('Account Name'),
                TextInput::make('content.bicec_number')->label('Account Number'),
                TextInput::make('content.bicec_swift')->label('Swift Code'),
                TextInput::make('content.bicec_iban')->label('IBAN (International)'),
            ]),
        ];
    }

    private static function mobileMoneyFields(): array
    {
        return [
            TextInput::make('content.title')->label('Section Title'),
            TextInput::make('content.subtitle')->label('Section Subtitle'),
            Section::make('MTN Mobile Money')->schema([
                TextInput::make('content.mtn_title')->label('Title'),
                TextInput::make('content.mtn_number')->label('Phone Number'),
                TextInput::make('content.mtn_name')->label('Account Name'),
            ]),
            Section::make('Orange Money')->schema([
                TextInput::make('content.orange_title')->label('Title'),
                TextInput::make('content.orange_number')->label('Phone Number'),
                TextInput::make('content.orange_name')->label('Account Name'),
            ]),
        ];
    }

    private static function partnershipFaqsFields(): array
    {
        return [
            TextInput::make('content.subtitle')->label('Subtitle'),
            TextInput::make('content.title')->label('Title'),
            Section::make('FAQ 1')->schema([
                TextInput::make('content.faq_1_question')->label('Question'),
                Textarea::make('content.faq_1_answer')->label('Answer')->rows(2),
            ]),
            Section::make('FAQ 2')->schema([
                TextInput::make('content.faq_2_question')->label('Question'),
                Textarea::make('content.faq_2_answer')->label('Answer')->rows(2),
            ]),
            Section::make('FAQ 3')->schema([
                TextInput::make('content.faq_3_question')->label('Question'),
                Textarea::make('content.faq_3_answer')->label('Answer')->rows(2),
            ]),
            Section::make('FAQ 4')->schema([
                TextInput::make('content.faq_4_question')->label('Question'),
                Textarea::make('content.faq_4_answer')->label('Answer')->rows(2),
            ]),
        ];
    }

    private static function featuredEventFields(): array
    {
        return [
            TextInput::make('content.title')->label('Event Title'),
            Textarea::make('content.description_1')->label('Description Paragraph 1')->rows(3),
            Textarea::make('content.description_2')->label('Description Paragraph 2')->rows(2),
            Section::make('Event Highlights')->schema([
                TextInput::make('content.highlight_1')->label('Highlight 1'),
                TextInput::make('content.highlight_2')->label('Highlight 2'),
                TextInput::make('content.highlight_3')->label('Highlight 3'),
                TextInput::make('content.highlight_4')->label('Highlight 4'),
            ]),
            Section::make('Slider Images')->schema([
                FileUpload::make('content.slider_image_1')->label('Slider Image 1')->image()->disk('public')->directory('page-content'),
                FileUpload::make('content.slider_image_2')->label('Slider Image 2')->image()->disk('public')->directory('page-content'),
                FileUpload::make('content.slider_image_3')->label('Slider Image 3')->image()->disk('public')->directory('page-content'),
            ]),
        ];
    }

    private static function eventFaqsFields(): array
    {
        return [
            TextInput::make('content.section_title')->label('Section Title'),
            Section::make('FAQ 1')->schema([
                TextInput::make('content.faq_1_question')->label('Question'),
                Textarea::make('content.faq_1_answer')->label('Answer')->rows(2),
            ]),
            Section::make('FAQ 2')->schema([
                TextInput::make('content.faq_2_question')->label('Question'),
                Textarea::make('content.faq_2_answer')->label('Answer')->rows(2),
            ]),
            Section::make('FAQ 3')->schema([
                TextInput::make('content.faq_3_question')->label('Question'),
                Textarea::make('content.faq_3_answer')->label('Answer')->rows(2),
            ]),
            Section::make('FAQ 4')->schema([
                TextInput::make('content.faq_4_question')->label('Question'),
                Textarea::make('content.faq_4_answer')->label('Answer')->rows(2),
            ]),
            Section::make('FAQ 5')->schema([
                TextInput::make('content.faq_5_question')->label('Question'),
                Textarea::make('content.faq_5_answer')->label('Answer')->rows(2),
            ]),
        ];
    }

    private static function eventsSidebarFields(): array
    {
        return [
            Section::make('Event Categories')->schema([
                TextInput::make('content.categories_title')->label('Categories Title'),
                TextInput::make('content.category_1')->label('Category 1'),
                TextInput::make('content.category_2')->label('Category 2'),
                TextInput::make('content.category_3')->label('Category 3'),
                TextInput::make('content.category_4')->label('Category 4'),
                TextInput::make('content.category_5')->label('Category 5'),
            ]),
            Section::make('Call to Action Box')->schema([
                TextInput::make('content.cta_title')->label('CTA Title'),
                Textarea::make('content.cta_description')->label('CTA Description')->rows(2),
                TextInput::make('content.cta_button_text')->label('Button Text'),
            ]),
        ];
    }

    private static function defaultFields(): array
    {
        return [
            Textarea::make('content')->label('Content (JSON)')->rows(10),
        ];
    }
}
