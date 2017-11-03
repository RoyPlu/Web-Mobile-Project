const initialState = {
    title: 'Dashboard',
    locationEntries: [],
    problemEntries: [],
};

const layoutreducer = (state = initialState, action) => {
    switch (action.type) {
        case 'SET_TITLE':
            return { ...state, ...{ title: action.payload } };
        case 'SET_LOCATIONENTRIES':
            return { ...state, ...{ locationEntries: action.payload } };
        case 'ADD_LOCATIONENTRY':
            return { ...state, ...{ locationEntries: [...state.locationEntries, action.payload] } };
        case 'DELETE_LOCATIONENTRY':
            const date = action.payload;
            const entryToDeleteIndex = state.locationEntries.findIndex(e => e.date === date);
            const locationEntries = [...state.locationEntries.slice(0, entryToDeleteIndex), ...state.locationEntries.slice(entryToDeleteIndex + 1)];
            return { ...state, ...{ locationEntries: locationEntries } };
        default:
            return state;
    }
}

export default layoutreducer;