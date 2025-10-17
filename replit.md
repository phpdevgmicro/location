# Overview

This is a PHP-based medical location finder website for a healthcare organization ("Specialty Care Clinics") with multiple locations across Texas. The site features an interactive Google Maps-powered location search tool that allows users to find nearby medical facilities by address, filter by location type, and adjust search radius. The project displays information for 30+ medical facilities including Primary Care Offices, Orthopedic centers, Pain Management clinics, and other specialty services.

# User Preferences

Preferred communication style: Simple, everyday language.

# System Architecture

## Frontend Architecture

**Technology Stack**: PHP website with JavaScript/Google Maps integration
- PHP server-side rendering (`index.php` as main entry point)
- Two CSS files: `custom.css` for component-specific styling and `site.css` for global styles
- Responsive design patterns using CSS grid and flexbox
- Google Maps JavaScript API for interactive location mapping
- Google Places API for address autocomplete
- Fixed positioning navigation header

**Design Decisions**:
- **Problem**: Need for interactive location finder with real-time search and mapping
- **Solution**: PHP-based site with Google Maps integration and JavaScript for dynamic interactions
- **Rationale**: Enables address search, distance filtering, and visual map display while maintaining server-side simplicity
- **Trade-offs**: Requires JavaScript enabled, API key management, but gains rich interactive features

## Location Finder Features

**Interactive Search & Filtering**:
- Address autocomplete using Google Places API
- Real-time location header update displaying selected address (e.g., "Showing Locations Near: Dallas, TX")
- Location type filtering (Primary Care, Orthopedic, Pain Management, General Surgery, Plastic Surgery, Podiatry, Vascular Surgery, Cardiology, Oncology, Chiropractic)
- Distance-based search radius (5mi, 10mi, 20mi, 50mi options)
- Dynamic results display with distance calculations using Haversine formula

**Map Integration**:
- Interactive Google Maps display centered on Dallas, TX by default
- Custom marker icons for different location types:
  - `5_1760719237353.png` - Urgent Care (red marker)
  - `6_1760719237353.png` - Hospital (blue marker)
  - `7_1760719237354.png` - Specialty Care (purple marker)
  - `8_1760719237355.png` - Primary Care (green marker)
  - `9_1760719237356.png` - Infusions (teal marker)
  - `10_1760719237356.png` - All Other Locations (light blue circle marker)
- User location marker displayed when address is selected
- Map legend showing all location types with icons

**Location Display Cards** (Updated October 2025):
- Clean white card design with subtle shadow (`box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1)`)
- Location name and type (1.1rem, font-weight: 600, color: #0c3666)
- Distance information from user's location (1rem, font-weight: 500)
- Split address display for better readability:
  - Street address on first line
  - City, State, ZIP on second line
- Phone number in green color (📞 866-794-9781)
- "Show on map" link with map pin emoji icon
- "LOCATION DETAILS" button (full width, #0c3666 background, no border-radius)

## Data Structure

**Location Data Management**:
- JSON-formatted location data stored in `/attached_assets/` directory
- Structured data model with `type`, `count`, `description`, and `addresses` fields
- Multiple duplicate files suggest data versioning or backup strategy
- Three primary facility types: Primary Care (14 locations), Orthopedic (10 locations), Pain Management (6 locations)

**Data Schema**:
```json
{
  "type": "string",           // Facility category
  "count": "number",          // Total locations
  "description": "string",    // Service details
  "addresses": ["string"]     // List of physical addresses
}
```

**Design Decisions**:
- **Problem**: Managing multi-location healthcare facility information
- **Solution**: Centralized JSON data structure with categorized facility types
- **Alternatives Considered**: Database-driven approach vs. static files
- **Rationale**: Static JSON files chosen for simplicity and direct integration with static site
- **Pros**: Easy to edit, version control friendly, no database overhead
- **Cons**: Manual updates required, no dynamic filtering without JavaScript

## Styling Architecture

**CSS Organization**:
- Modular separation between custom components and site-wide styles
- Reset/normalization patterns (removing default margins on common elements)
- Utility-first class naming convention (e.g., `.gd-g--center`, `.btn`, `.pageheader`)

**Layout Patterns**:
- Fixed navigation for accessibility
- Centered text alignment for headers and content
- Custom button styling with border treatments
- Grid-based layout system (indicated by `.gd-g` prefix classes)

# External Dependencies

## CSS Resources
- Character encoding set to UTF-8 for proper text rendering
- No external CSS frameworks detected (Bootstrap, Tailwind, etc.)
- Custom CSS written from scratch

## Data Assets
- Location data stored as static JSON files in `/attached_assets/` directory
- Text file backups of location data (`.txt` format)
- No external APIs or services for data retrieval

## Third-party Services
- **Google Maps JavaScript API** - Interactive map display and location visualization
- **Google Places API** - Address autocomplete and geocoding functionality
- **Google Analytics** - Traffic monitoring (Tag ID: G-PV6VBESTRG)
- No database connections (using static JSON data)
- No authentication services implemented

## Recent Updates (October 2025)
- ✅ Implemented dynamic location header that updates when user selects an address
- ✅ Updated map legend with correct marker icons matching all location types
- ✅ Redesigned location listing cards with improved typography and layout
- ✅ Added "Show on map" links with map pin icons
- ✅ Split address display for better readability
- ✅ Corrected marker icon assignments:
  - Infusions now uses teal marker (9_1760719237356.png)
  - All Other Locations uses circular marker (10_1760719237356.png)