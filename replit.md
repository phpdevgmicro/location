# Overview

This is a static website project for a medical practice or healthcare organization with multiple locations across Texas. The site displays information about various medical facilities including Primary Care Offices, Orthopedic centers, and Pain Management clinics. The project consists of basic HTML/CSS styling with structured data files containing location information for 30+ medical facilities across the state.

# User Preferences

Preferred communication style: Simple, everyday language.

# System Architecture

## Frontend Architecture

**Technology Stack**: Static HTML/CSS website
- Pure CSS implementation without JavaScript frameworks
- Two CSS files: `custom.css` for component-specific styling and `site.css` for global styles
- Responsive design patterns using CSS grid and flexbox (evident from class names like `.gd-g--center`)
- Fixed positioning navigation for persistent header access

**Design Decisions**:
- **Problem**: Need for lightweight, fast-loading medical practice website
- **Solution**: Static HTML/CSS without heavy frameworks
- **Rationale**: Reduces load times, improves accessibility, and simplifies maintenance for content-focused site
- **Trade-offs**: Limited interactivity but gains in performance and simplicity

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
- No evidence of external integrations (analytics, maps APIs, booking systems)
- No database connections detected
- No authentication services implemented

## Potential Integration Points
The current architecture could benefit from:
- Google Maps API integration for location visualization
- Analytics service (Google Analytics, Plausible) for traffic monitoring
- Content Management System for easier location data updates
- Appointment booking system integration