# Overview

This is a PHP-based medical location finder website for a healthcare organization ("Specialty Care Clinics") with multiple locations across Texas. The site features an interactive Google Maps-powered location search tool that allows users to find nearby medical facilities by address, filter by location type, and adjust search radius. The project displays information for 30+ medical facilities including Primary Care Offices, Orthopedic centers, Pain Management clinics, and other specialty services.

# User Preferences

Preferred communication style: Simple, everyday language.

# System Architecture

## Frontend Architecture

**Technology Stack**: PHP website with JavaScript/Google Maps integration
- PHP server-side rendering (`index.php` as main entry point)
- Three CSS files: 
  - `site.css` - Global site styles (minified)
  - `custom.css` - Component-specific styling
  - `locations.css` - Location finder specific styles (flexbox layout fixes)
- Responsive design patterns using CSS grid and flexbox
- Google Maps JavaScript API for interactive location mapping
- Google Places API for address autocomplete
- Fixed positioning navigation header

**Design Decisions**:
- **Problem**: Need for interactive location finder with real-time search and mapping
- **Solution**: PHP-based site with Google Maps integration and JavaScript for dynamic interactions
- **Rationale**: Enables address search, distance filtering, and visual map display while maintaining server-side simplicity
- **Trade-offs**: Requires JavaScript enabled, API key management, but gains rich interactive features

## Map Controls & User Experience

**Map Zoom Control**:
- Map uses `gestureHandling: 'greedy'` mode, allowing users to zoom with mouse scroll wheel without holding Ctrl key
- Smooth and intuitive map navigation experience

**Smooth Scrolling**:
- Card listing has `scroll-behavior: smooth` for better user experience when scrolling through locations
- Independent scrolling for card listing panel while map remains fixed

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
- ✅ Fixed legend icon display issues (October 17, 2025):
  - Replaced PNG icons with CSS-styled clean colored circles
  - All legend items display without background color artifacts
  - Consistent styling across all location types using `.legend-icon` CSS class with white background and shadow
- ✅ Auto-location detection and proximity features (October 17, 2025):
  - Browser geolocation automatically detects user's location on page load
  - All locations display distance in miles from user's location
  - Results automatically sorted by proximity (nearest first)
  - Map shows all location markers with correct category icons
  - Location type filtering updates both map markers and listing
  - Clicking map markers shows info windows with location details and distance
  - Real-time header updates as user types address
  - Geocoding integration for address-to-coordinates conversion
- ✅ UI Improvements (October 17, 2025):
  - Removed user location marker from map for cleaner display
  - Distance now displayed as plain text in top-right of location cards (matching reference design)
  - "Show on map" link positioned in top-right with distance using Bootstrap responsive grid
  - Restructured location cards to match reference HTML layout:
    - Uses Bootstrap's responsive grid system (`.row`, `.col-12`, `.col-md-7`, `.col-md-5`)
    - Location name on left (70% width on medium+ screens)
    - "Show on map" link and distance on right (30% width on medium+ screens)
    - Full width stack on mobile devices
    - Added semantic class names: `.profile-details`, `.profile-data`, `.map-data`, `.address-row`, `.telephone`, `.action-row`
- ✅ Interactive Features Update (October 17, 2025):
  - Added green underline hover effects for phone number and "Show on map" links
  - Implemented continuous marker bounce animation when clicking "Show on map"
    - Animation continues indefinitely until user clicks on the bouncing marker OR clicks another "Show on map" link
    - Only one marker can bounce at a time - selecting a new location stops the previous marker
    - Clicking on the bouncing marker stops animation and shows the location info popup
  - Updated "Show on map" to ONLY animate marker without moving map or opening popup
  - Redesigned marker info window popup to match reference design with:
    - Location name/type in bold header
    - Full address split across multiple lines
    - Two action buttons: "Location Details" and "Get Directions"
    - Close button (X) in top-right corner
    - Clean white background with blue bordered buttons
- ✅ Reference Design Match Update (October 17, 2025):
  - Changed location header background from blue (#0c3666) to green (#28a745)
  - Added informational legend below green header showing marker references
  - Legend displays marker icons for each location type (purely informational, non-interactive):
    - "Urgent Care" - red marker icon
    - "Hospital" - blue marker icon  
    - "Specialty Care" - purple marker icon
    - "Primary Care" - green marker icon
    - "Infusions" - teal marker icon
    - "All Other Locations" - custom blue circular marker icon (sourced from Texas Health)
  - Reduced marker icon size from 32x32px to 24x24px for better visual balance (applied to both map and legend)
  - Legend items centered with proper spacing for clean presentation
  - **Container & Grid Layout** (October 17, 2025):
    - Wrapped all sections (searchbar, filters, header, legend, map, listing) in a container (max-width: 1400px)
    - Changed map and listing grid from 33/67 split to equal 50/50 split on desktop
    - Map and listing panels now have identical width for balanced layout
    - Maintains full-width stacking on mobile devices
  - **Fixed Height & Scrolling** (October 17, 2025):
    - Set map height to 44rem (fixed height per user requirement)
    - Set card listing height to 44rem (matches map height exactly)
    - Card listing scrolls independently with overflow-y: auto and scroll-behavior: smooth
    - Both panels have equal height creating clean visual alignment
    - Added flex-wrap: nowrap on desktop to ensure panels stay side-by-side
    - Set max-width: 50% on both panels to prevent wrapping
  - **Card Layout Restructure** (October 17, 2025):
    - Title and distance now on same row using flexbox (title left, distance right)
    - "Show on map" link appears on its own line below title
    - Address lines displayed below
    - Phone number with icon below address
    - Blue "LOCATION DETAILS" button at bottom of card
    - Removed Bootstrap row/col grid structure in favor of simpler flexbox layout
    - Layout now exactly matches reference design
  
## Recent Bug Fixes (October 17, 2025)
- ✅ **Distance Filter Fix**: Fixed the "Search Within" distance filters (5mi, 10mi, 20mi, 50mi) to properly filter locations based on selected distance
  - Changed default distance behavior from 400 miles to null (no filter by default)
  - Filter now only applies when a distance button is clicked AND user location is available
  - Locations display without distance filter until user selects an address and clicks a distance option
- ✅ **Map Auto-Center**: Map now automatically centers and zooms to show all filtered addresses
  - Removed fixed centering on user location
  - Map dynamically adjusts bounds to fit all visible location markers
  - Provides optimal view of filtered results regardless of location count
- ✅ **Custom No Results Message**: Updated empty state message to match reference design
  - Message reads: "Our apologies, but no results were found for your search criteria. Please try something else."
  - Centered layout with proper spacing and typography
  - Map markers are cleared when no results are found
- ✅ **Card Layout Redesign** (October 17, 2025): Updated location cards to match Texas Health reference design
  - Title in blue (#2563eb) on left side
  - Distance and "Show on map" stacked vertically on right side (right-aligned)
  - "Show on map" link positioned below distance with blue map pin icon
  - Improved address parsing to separate street, suite/unit, and city/state/zip on individual lines
  - Phone number in green (#16a34a) with phone icon
  - Button updated to blue (#1e40af) with uppercase text
  - Font family: System fonts (-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, etc.)
  - Font sizes: Title 1rem (16px), other text 0.875rem (14px) matching reference
  - Refined typography and spacing to match reference exactly

## Known Issues
- **Geocoding API Permission Required**: The Google Maps API key needs the Geocoding API enabled to calculate distances and show location coordinates. Without this:
  - Locations may not load properly
  - Distance calculations will not work
  - Map markers may not appear
  - To fix: Enable the Geocoding API in Google Cloud Console for the API key: AIzaSyBj68ryDqKcMZSC0CC03YOcMXLmIVHqrGE