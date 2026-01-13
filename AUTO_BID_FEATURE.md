# Auto Bid Feature Documentation

## Overview
The Auto Bid feature has been successfully implemented in the Car Auction system. This feature allows users to set a maximum bid amount, and the system will automatically place bids on their behalf when other users bid, up to their specified maximum.

## How It Works

### User Experience
1. When placing a bid on a car, users can check the "Aktivera Auto Bid" (Enable Auto Bid) checkbox
2. After enabling, they enter two amounts:
   - **Current Bid Amount**: The initial bid they want to place
   - **Max Auto Bid Amount**: The maximum amount they're willing to pay (must be at least 500 SEK more than current bid)

### System Behavior
When someone else places a bid:
1. The system checks if any users have active auto-bids for that car
2. If found, it automatically places a counter-bid for them
3. The counter-bid is the minimum needed to stay on top (previous bid + 500 SEK increment)
4. This continues until the max auto-bid limit is reached
5. The max bid amount is hidden from other users

## Technical Implementation

### Database Changes
Added two new columns to the `bidding` table:
- `max_auto_bid` (INT): Stores the maximum amount for auto-bidding
- `is_auto_bid` (TINYINT): Flag indicating if this is an auto-bid (1) or manual bid (0)

### Backend Changes

#### Controller: `Auth.php`
- Modified `bid_added()` method to accept `max_auto_bid` parameter
- Added `process_auto_bidding()` method that:
  - Checks for active auto-bids when a new bid is placed
  - Automatically places counter-bids for users with auto-bid enabled
  - Respects the maximum auto-bid limits
  - Prevents infinite loops by processing one auto-bid at a time

#### Model: `User_model.php`
- Added `get_active_auto_bids()` method to fetch users with active auto-bids for a specific car

### Frontend Changes

#### View: `car_view.php`
- Added checkbox to enable/disable auto-bid
- Added input field for max auto-bid amount
- Added helpful info text explaining the feature

#### JavaScript: `footer.php`
- Added toggle functionality for auto-bid section
- Enhanced form validation to require max_auto_bid when auto-bid is enabled
- Validation ensures max_auto_bid is at least 500 SEK higher than the current bid
- Form resets properly after successful bid placement

## Usage Example

### Scenario
- Current highest bid: 50,000 SEK
- User A sets: Bid = 52,000 SEK, Max Auto Bid = 60,000 SEK
- User B bids: 55,000 SEK

### What Happens
1. User B's bid of 55,000 SEK is placed
2. System detects User A has auto-bid enabled with max 60,000 SEK
3. System automatically places 55,500 SEK bid for User A
4. If User B bids again (56,000 SEK), system auto-bids 56,500 SEK for User A
5. This continues until either:
   - User A's max (60,000 SEK) is reached, OR
   - User B stops bidding

## Benefits
✅ Users don't need to stay online 24/7  
✅ Prevents last-second bidding stress  
✅ Keeps users competitive without overbidding  
✅ Maximum bid remains private  
✅ Only bids the minimum needed to stay on top  

## Configuration
- **Bid Increment**: 500 SEK (configurable in `Auth.php::bid_added()`)
- **Currency**: SEK (Swedish Krona)

## Testing
To test the feature:
1. Create two user accounts
2. Find an auction car
3. User 1: Place bid with auto-bid enabled (e.g., 50,000 SEK with max 60,000 SEK)
4. User 2: Place manual bid higher than User 1's current bid (e.g., 52,000 SEK)
5. Verify that system automatically places 52,500 SEK bid for User 1
6. Continue bidding with User 2 until User 1's max is reached

## Files Modified
1. `/application/controllers/Auth.php` - Bid processing logic
2. `/application/models/User_model.php` - Database queries
3. `/application/views/car_view.php` - Bid form UI
4. `/application/views/footer.php` - JavaScript validation and AJAX
5. Database: `bidding` table schema

## Future Enhancements (Optional)
- Email/SMS notifications when auto-bid is triggered
- Dashboard showing active auto-bids
- Auto-bid history log
- Ability to modify max auto-bid while auction is active
- Auto-bid analytics and statistics
